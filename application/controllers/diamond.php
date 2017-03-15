<?php

class Diamond extends CI_Controller  {
	
	function Diamond() {

		parent::__construct();
		header("Content-type:text/html;charset=utf-8");
        $this->load->library('session');
        $this->load->library('PHPExcel');
        $this->load->library('PHPExcel/IOFactory');
		$this->load->helper(array('form', 'url'));
		$this->load->model('diamonds');
	}

    function index() {
        redirect('/diamond/search');
    }


	function search() {

        $data['shape_sel_all']      = $this->security->xss_clean($this->input->post('shape_sel_all'));
        $data['shape_sel_one']      = $this->security->xss_clean($this->input->post('shape_sel_one'));
        
        // $data['shape_sel_one']      = array();
        // if($data['shape_sel_all'] != 'on') {
        //     $data['shape_sel_one']  = $this->security->xss_clean($this->input->post('shape_sel_one'));
        // }

        //print_r($data['shape_sel_one']);
        $data['button_search']      = $this->security->xss_clean($this->input->post('button_search'));
        $data['button_excel']      = $this->security->xss_clean($this->input->post('button_excel'));
        $data['page_prev']      = $this->security->xss_clean($this->input->post('page_prev'));
        $data['page_next']      = $this->security->xss_clean($this->input->post('page_next'));

        echo 'button_search'.$data['button_search'] ;
        echo 'button_excel'.$data['button_excel'] ;
        echo 'page_prev'.$data['page_prev'] ;
        echo 'page_next'.$data['page_next'] ;
        
        //echo $data['page'];

        $data['color_sel_all']      = $this->security->xss_clean($this->input->post('color_sel_all'));
        $data['color_sel_one']      = $this->security->xss_clean($this->input->post('color_sel_one'));
        

        $data['clarity_sel_all']      = $this->security->xss_clean($this->input->post('clarity_sel_all'));
        $data['clarity_sel_one']      = $this->security->xss_clean($this->input->post('clarity_sel_one'));
        
        $data['cut_sel_all']      = $this->security->xss_clean($this->input->post('cut_sel_all'));
        $data['cut_sel_one']      = $this->security->xss_clean($this->input->post('cut_sel_one'));
        

        $data['polish_sel_all']      = $this->security->xss_clean($this->input->post('polish_sel_all'));
        $data['polish_sel_one']      = $this->security->xss_clean($this->input->post('polish_sel_one'));
        

        $data['symmetry_sel_all']      = $this->security->xss_clean($this->input->post('symmetry_sel_all'));
        $data['symmetry_sel_one']      = $this->security->xss_clean($this->input->post('symmetry_sel_one'));
        

        $data['fluorescence_sel_all']      = $this->security->xss_clean($this->input->post('fluorescence_sel_all'));
        $data['fluorescence_sel_one']      = $this->security->xss_clean($this->input->post('fluorescence_sel_one'));
        

        $data['inspectiontype_sel_all']      = $this->security->xss_clean($this->input->post('inspectiontype_sel_all'));
        $data['inspectiontype_sel_one']      = $this->security->xss_clean($this->input->post('inspectiontype_sel_one'));
        

        $data['carat_weight']      = $this->security->xss_clean($this->input->post('carat_weight'));
        $data['minCarat']      = $this->security->xss_clean($this->input->post('minCarat'));
        $data['maxCarat']      = $this->security->xss_clean($this->input->post('maxCarat'));
        if($data['minCarat'] == null) {
            $data['minCarat'] = 0;
        }

        if($data['maxCarat'] == null) {
            $data['maxCarat'] = 1000;
        }


        $data['price']      = $this->security->xss_clean($this->input->post('price'));
        $data['minPrice']      = $this->security->xss_clean($this->input->post('minPrice'));
        $data['maxPrice']      = $this->security->xss_clean($this->input->post('maxPrice'));
        if($data['minPrice'] == null) {
            $data['minPrice'] = 0;
        }

        if($data['maxPrice'] == null) {
            $data['maxPrice'] = 10000000;
        }

        // if($data['shape_sel_all'] != 'all') {
        //     print_r(array_values($data['shape_sel_one']));
        // }

        $queryAnd = 0;

        $queryStr = "select * from diamond where ";
        if($data['shape_sel_all'] != 'all' && is_array($data['shape_sel_one'])) {

            $shapeStr = '(';
            $count = count($data['shape_sel_one']);
            for ($i = 0; $i < $count; $i++) {
                //print_r($data['shape_sel_one'][$i]);
                if($i == $count-1) {
                    $shapeStr = $shapeStr.'\''.$data['shape_sel_one'][$i].'\'';
                } else {
                    $shapeStr = $shapeStr.'\''.$data['shape_sel_one'][$i].'\',';
                }
            }
            $shapeStr = $shapeStr.')';
            $queryStr = $queryStr.'shape in '.$shapeStr;

            $queryAnd = 1;
            //print_r($shapeStr);
        } 
        //print_r($data['carat_weight']);

        if($data['color_sel_all'] != 'all' && is_array($data['color_sel_one'])) {

            $colorStr = '(';
            $count = count($data['color_sel_one']);
            for ($i = 0; $i < $count; $i++) {
                //print_r($data['shape_sel_one'][$i]);
                if($i == $count-1) {
                    $colorStr = $colorStr.'\''.$data['color_sel_one'][$i].'\'';
                } else {
                    $colorStr = $colorStr.'\''.$data['color_sel_one'][$i].'\',';
                }
            }
            $colorStr = $colorStr.')';
            if($queryAnd == 1) {
                $queryStr = $queryStr.' and color in '.$colorStr;
            } else {
                $queryStr = $queryStr.' color in '.$colorStr;
            }
            
            $queryAnd = 1;
            //print_r($colorStr);
        } 

        if($data['clarity_sel_all'] != 'all' && is_array($data['clarity_sel_one'])) {

            $clarityStr = '(';
            $count = count($data['clarity_sel_one']);
            for ($i = 0; $i < $count; $i++) {
                //print_r($data['shape_sel_one'][$i]);
                if($i == $count-1) {
                    $clarityStr = $clarityStr.'\''.$data['clarity_sel_one'][$i].'\'';
                } else {
                    $clarityStr = $clarityStr.'\''.$data['clarity_sel_one'][$i].'\',';
                }
            }
            $clarityStr = $clarityStr.')';
            if($queryAnd == 1) {
                $queryStr = $queryStr.' and clarityGrade in '.$clarityStr;
            } else {
                $queryStr = $queryStr.' clarityGrade in '.$clarityStr;
            }
            
            $queryAnd = 1;
            //print_r($clarityStr);
        } 


        if($data['cut_sel_all'] != 'all' && is_array($data['cut_sel_one'])) {

            $cutStr = '(';
            $count = count($data['cut_sel_one']);
            for ($i = 0; $i < $count; $i++) {
                //print_r($data['shape_sel_one'][$i]);
                if($i == $count-1) {
                    $cutStr = $cutStr.'\''.$data['cut_sel_one'][$i].'\'';
                } else {
                    $cutStr = $cutStr.'\''.$data['cut_sel_one'][$i].'\',';
                }
            }
            $cutStr = $cutStr.')';
            if($queryAnd == 1) {
                $queryStr = $queryStr.' and cutGrade in '.$cutStr;
            } else {
                $queryStr = $queryStr.' cutGrade in '.$cutStr;
            }
            
            $queryAnd = 1;
            //print_r($cutStr);
        } 

        if($data['polish_sel_all'] != 'all' && is_array($data['polish_sel_one'])) {

            $polishStr = '(';
            $count = count($data['polish_sel_one']);
            for ($i = 0; $i < $count; $i++) {
                //print_r($data['shape_sel_one'][$i]);
                if($i == $count-1) {
                    $polishStr = $polishStr.'\''.$data['polish_sel_one'][$i].'\'';
                } else {
                    $polishStr = $polishStr.'\''.$data['polish_sel_one'][$i].'\',';
                }
            }
            $polishStr = $polishStr.')';
            if($queryAnd == 1) {
                $queryStr = $queryStr.' and polish in '.$polishStr;
            } else {
                $queryStr = $queryStr.' polish in '.$polishStr;
            }
            
            $queryAnd = 1;
            //print_r($polishStr);
        } 

        if($data['symmetry_sel_all'] != 'all' && is_array($data['symmetry_sel_one'])) {

            $symmetryStr = '(';
            $count = count($data['symmetry_sel_one']);
            for ($i = 0; $i < $count; $i++) {
                //print_r($data['shape_sel_one'][$i]);
                if($i == $count-1) {
                    $symmetryStr = $symmetryStr.'\''.$data['symmetry_sel_one'][$i].'\'';
                } else {
                    $symmetryStr = $symmetryStr.'\''.$data['symmetry_sel_one'][$i].'\',';
                }
            }
            $symmetryStr = $symmetryStr.')';
            if($queryAnd == 1) {
                $queryStr = $queryStr.' and symmetry in '.$symmetryStr;
            } else {
                $queryStr = $queryStr.' symmetry in '.$symmetryStr;
            }
            
            $queryAnd = 1;
            //print_r($symmetryStr);
        } 

        if($data['fluorescence_sel_all'] != 'all' && is_array($data['fluorescence_sel_one'])) {

            $fluorescenceStr = '(';
            $count = count($data['fluorescence_sel_one']);
            for ($i = 0; $i < $count; $i++) {
                //print_r($data['shape_sel_one'][$i]);
                if($i == $count-1) {
                    $fluorescenceStr = $fluorescenceStr.'\''.$data['fluorescence_sel_one'][$i].'\'';
                } else {
                    $fluorescenceStr = $fluorescenceStr.'\''.$data['fluorescence_sel_one'][$i].'\',';
                }
            }
            $fluorescenceStr = $fluorescenceStr.')';
            if($queryAnd == 1) {
                $queryStr = $queryStr.' and fluorescence in '.$fluorescenceStr;
            } else {
                $queryStr = $queryStr.' fluorescence in '.$fluorescenceStr;
            }
            
            $queryAnd = 1;
            //print_r($fluorescenceStr);
        } 



        if($queryAnd == 0) {
            $queryStr = "select * from diamond";
        } else {
            $queryStr = $queryStr.' and caratWeight >= '.$data['minCarat'].' and caratWeight <= '.$data['maxCarat'];
            $queryStr = $queryStr.' and price >= '.$data['minPrice'].' and price <= '.$data['maxPrice'];
        }


        $query = $this -> db -> query($queryStr);
        $data['result_size'] = $query->num_rows();
        echo 'max-size'.$query->num_rows();

        if($data['page_next']  > 0 ) {
            $page = $data['page_next'];
        } else {
            $page = 1;
        }

        echo 'page'.$page;

        $data['page'] = $page;
        if($page > 0) {
            $data['prevPage'] = $page -1;
            if($data['result_size'] > 50 * $page) {
                $data['nextPage'] = $page +1;
            } else {
                $data['nextPage'] = $page;
            }
        } else {
            $data['prevPage'] = 0;
            $data['nextPage'] = $page +1;
        }

        echo 'page_prev'.$data['page_prev'] ;
        echo 'page_next'.$data['page_next'] ;
        
        $data['totalPage'] = ceil($data['result_size'] / 50);

        if($data['button_excel'] > 0) {

            $this->session->set_flashdata('query_string', $queryStr);
            redirect('/diamond/excel');

            // // Starting the PHPExcel library
            // $this -> load -> library('PHPExcel');
            // $this -> load -> library('PHPExcel/IOFactory');

            // $objPHPExcel = new PHPExcel();
            // $objPHPExcel -> getProperties() -> setTitle("export") -> setDescription("none");

            // $objPHPExcel -> setActiveSheetIndex(0); 
            // // Field names in the first row
            // $fields = $query -> list_fields();
            // $col = 0;
            // foreach ($fields as $field)
            // {
            //     $objPHPExcel -> getActiveSheet() -> setCellValueByColumnAndRow($col, 1, $field);
            //     $col++;
            // } 
            // // Fetching the table data
            // $row = 2;
            // foreach($query -> result() as $data)
            // {
            //     $col = 0;
            //     foreach ($fields as $field)
            //     {
            //         $objPHPExcel -> getActiveSheet() -> setCellValueByColumnAndRow($col, $row, $data -> $field);
            //         $col++;
            //     } 

            //     $row++;
            // } 

            // $objPHPExcel -> setActiveSheetIndex(0);

            // $objWriter = IOFactory :: createWriter($objPHPExcel, 'Excel5'); 
            // // Sending headers to force the user to download the file
            // header('Content-Type: application/vnd.ms-excel');
            // // header('Content-Disposition: attachment;filename="'. date('dMy') . '.xls"');
            // header('Content-Disposition: attachment;filename="diamonds.xls"');
            // header('Cache-Control: max-age=0');

            // $objWriter -> save('php://output');

        }  else {

            $queryLimit = ($page - 1) * 50;
            //print_r($queryStr);
            $queryStr = $queryStr.' limit '.$queryLimit.', 50';


            //echo '99999'.$data['shape_sel_all'].' '.$data['shape_sel_one'][0];
    		//$data['diamonds'] = $this->Diamond->getAllDiamonds();
            $query = $this -> db -> query($queryStr);
            echo 'query-size'.$query->num_rows();

            if (!$query)
                return false; 
            

            $data['diamonds'] = $query->result(); 

            if(!is_array($data['shape_sel_one'])) {
                $data['shape_sel_one']      = array();
            }

            if(!is_array($data['color_sel_one'])) {
                $data['color_sel_one']      = array();
            }

            if(!is_array($data['clarity_sel_one'])) {
                $data['clarity_sel_one']      = array();
            }

            if(!is_array($data['cut_sel_one'])) {
                $data['cut_sel_one']      = array();
            }

            if(!is_array($data['polish_sel_one'])) {
                $data['polish_sel_one']      = array();
            }

            if(!is_array($data['symmetry_sel_one'])) {
                $data['symmetry_sel_one']      = array();
            }

            if(!is_array($data['fluorescence_sel_one'])) {
                $data['fluorescence_sel_one']      = array();
            }

            if(!is_array($data['inspectiontype_sel_one'])) {
                $data['inspectiontype_sel_one']      = array();
            }


    		$this->load->view('frontend/template/frontend-template-header');
    		$this->load->view('frontend/template/frontend-template-navigation');
    		$this->load->view('frontend/template/frontend-template-gallery');
    		$this->load->view('frontend/template/frontend-template-body', $data);
    		$this->load->view('frontend/template/frontend-template-filter-shape');
    		$this->load->view('frontend/template/frontend-template-filter-color');
    		$this->load->view('frontend/template/frontend-template-filter-clarity');
    		$this->load->view('frontend/template/frontend-template-filter-cut');
    		$this->load->view('frontend/template/frontend-template-filter-polish');
    		$this->load->view('frontend/template/frontend-template-filter-symmetry');
    		$this->load->view('frontend/template/frontend-template-filter-fluorescence');
    		$this->load->view('frontend/template/frontend-template-filter-inspectiontype');
    		$this->load->view('frontend/template/frontend-template-filter-caratweight');
    		$this->load->view('frontend/template/frontend-template-filter-price');
    		$this->load->view('frontend/template/frontend-template-filter-search');
    		$this->load->view('frontend/template/frontend-template-filter-results', $data);
    		$this->load->view('frontend/template/frontend-template-footer');
        }

	}

	function excel()
    {

        //print_r($queryStr);
        $queryStr = $this->session->flashdata('query_string');
        //$queryStr = null;
        if($queryStr == null) {
            $queryStr = "select * from diamond limit 0 , 200";
        }

        //echo 'query_string'.$queryStr;
        $query = $this -> db -> query($queryStr);
        //echo 'query-size'.$query->num_rows();


        if (!$query)
            return false; 
        // Starting the PHPExcel library


        $objPHPExcel = new PHPExcel();
        $objPHPExcel -> getProperties() -> setTitle("export") -> setDescription("none");

        $objPHPExcel -> setActiveSheetIndex(0); 
        // Field names in the first row
        $fields = $query -> list_fields();
        $col = 0;
        foreach ($fields as $field)
        {
            $objPHPExcel -> getActiveSheet() -> setCellValueByColumnAndRow($col, 1, $field);
            $col++;
        } 
        // Fetching the table data
        $row = 2;
        foreach($query -> result() as $data)
        {
            $col = 0;
            foreach ($fields as $field)
            {
                $objPHPExcel -> getActiveSheet() -> setCellValueByColumnAndRow($col, $row, $data -> $field);
                $col++;
            } 

            $row++;
        } 

        $objPHPExcel -> setActiveSheetIndex(0);

        $objWriter = IOFactory :: createWriter($objPHPExcel, 'Excel5'); 
        // Sending headers to force the user to download the file
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="diamonds-'. date('Y-m-d') . '.xls"');
        //header('Content-Disposition: attachment;filename="diamonds.xls"');
        header('Cache-Control: max-age=0');

        $objWriter -> save('php://output');
    } 


}

?>