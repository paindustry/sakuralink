<?php
Class Tour extends CI_Model
{

	function show_tours()
	{
		$this->db->order_by('tour_id','desc');
		$query = $this->db->get('tours');

	 	return $query->result();

	}
	function show_passangers($id)
	{
		$this->db->order_by('booking_id','desc');
		$this->db->where('tour_id', $id);
		$query = $this->db->get('bookings');

	 	return $query->result();

	}
	function get_tour($id)
	{
		$this->db->where('tour_id', $id);
		$query = $this->db->get('tours');
		if($query->num_rows() > 0)
		{
			$row = $query->row();
		}

	 	return $row;
	}
	function save_tour($data, $id)
	{

		$data['from_start_time'] = date('Y-m-d', strtotime(element('from_start_date', $data))). ' ' .strtotime(element('from_start_time', $data));
		$crop_data = elements(array('from','to','available_seats','start_price','from_start_time'), $data);
		$this->db->where('tour_id', $id);
		$this->db->update('tours', $crop_data);

	}

	function update_tour($tour_id, $data)
    {
        $this->db->where('tour_id',$tour_id);
        $this->db->update('tours',$data);
    }

	function create_tour($data)
	{
			$crop_data = elements(array('from','to','available_seats','start_price','from_start_time'), $data);
			$add_tour = $this->db->insert_string('tours', $crop_data);
			$this->db->query($add_tour);

	}
	function delete_tour($id)
	{
		$this->db->where('tour_id', $id);
     	$this->db->delete('tours');
	}
	function get_city_name($id){
		$this->db->select('city');
		$this->db->where('destination_id', $id);
		$query = $this->db->get('destinations');
		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   return $row->city;
		}

	}
	function list_cities(){
		// $query = $this->db->get('destinations');
		if ($query->num_rows() > 0)
		{
		   return $query->result();
		}
	}
	
	function get_company_info()
	{
		$this->db->from('settings');
	 	$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			$row = $query->row();
			return $row;
		}
	}
	function show_symbol($id){
		$this->db->select('symbol');
		$this->db->where('currency_id', $id);
		$query = $this->db->get('currency');
		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   return $row->symbol;
		}
	}
	static function status($departure_time){
		if ($departure_time < date("Y-m-d H:i:s")) {
			echo '<span class="label label-default">'.lang('Inactive').'</span>';
		}else{
			echo '<span class="label label-success">'.lang('Active').'</span>';
		}
	}

	function get_posts($number = 10, $start = 0)
	{
			$this->db->select();
			$this->db->from('postingan');
			$this->db->where('active',1);
			$this->db->order_by('date_added','desc');
			$this->db->limit($number, $start);
			$query = $this->db->get();
			return $query->result_array();
	}
function search_posts($query)
{
	$this->db->select();
	$this->db->from('postingan');
	$this->db->like("post_title", $query, 'both');
	$this->db->or_like("post", $query, 'both');
	$this->db->order_by('date_added', 'desc');
	$query = $this->db->get();
	return $query->result_array();
}
	function get_post_count()
	{
			$this->db->select()->from('posts')->where('active',1);
			$query = $this->db->get();
			return $query->num_rows;
	}
	function get_post($post_id)
	{
			$this->db->select();
			$this->db->from('postingan');
			$this->db->where(array('active'=>1,'post_id'=>$post_id));
			$this->db->order_by('date_added','desc');
			$query = $this->db->get();
			return $query->first_row('array');
	}
	function insert_post($data)
	{
			$this->db->insert('postingan',$data);
			return $this->db->insert_id();
	}

	function update_post($post_id, $data)
	{
			$this->db->where('post_id',$post_id);
			$this->db->update('posts',$data);
	}

	function delete_post($post_id)
	{
			$this->db->where('post_id',$post_id);
			$this->db->delete('posts');
	}
}
?>
