<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		// $results = DB::select('select * from users where id = ?', [1]);		
		
		// date('Y-m-d') - string
		$dateToday = new \DateTime();
		$dateTodayMonth = $dateToday->format('m');
		
		$materials = DB::select('select * from materials');
		$view_types = DB::select('select * from views_types');

		$shops = DB::select('select * from shops');
		$salers = DB::select('select * from salers');
		
		$total_sales = DB::select('select sc.*, pg.material_id, pg.name as pg_name from sales_counts as sc
									left join product_groups as pg on sc.product_group_id = pg.id
									');

		$today_views = DB::select('select vc.*, vt.name as view_type_name from views_counts as vc
									left join views_types as vt on vc.view_type_id = vt.id');
		
		$arrViews = [];
		
		$strDateToday = $dateToday->format('Y-m-d');
		
		foreach($today_views as $objView) {
			$varDate = \DateTime::createFromFormat('Y-m-d', $objView->date_views );
			if (empty($arrViews[ $varDate->format('Y-m-d') ][ $objView->view_type_name ])) {
				$arrViews[ $varDate->format('Y-m-d') ][ $objView->view_type_name ] = [ $objView->view_type_name, $objView->count ];
			} else {
				$arrViews[ $varDate->format('Y-m-d') ][ $objView->view_type_name ][1] += $objView->count;
			}
		}
		
		$arrCurrentMonths = [];
		$arrCurrentMaterials = [];
		$arrSalesByMaterials = [];
		
		// var for SalesDataBank by materials and month
		$arrSalesCountByMonthAndGroups = [];
		

		
		$intSalesCountPerMonth = 0;
		foreach ( $total_sales as $objSale ) {
			$varDate = \DateTime::createFromFormat('Y-m-d', $objSale->date_sale );
			
			$strMonthID = $varDate->format('m');
			
			if (empty($arrSalesCountByMonthAndGroups[ $strMonthID ][ $objSale->pg_name ])) {
				$arrSalesCountByMonthAndGroups[ $strMonthID ][$objSale->material_id][ $objSale->pg_name ] = $objSale->count;
			} else {
				$arrSalesCountByMonthAndGroups[ $strMonthID ][$objSale->material_id][ $objSale->pg_name ] += $objSale->count;
			}
			
			$arrCurrentMonths[ $strMonthID ] = 1;
			
			$arrCurrentMaterials[ $objSale->material_id ] = 1;
			
			if ( $strMonthID == $dateTodayMonth ) {
				$intSalesCountPerMonth += $objSale->count;
				
			}

			$arrSalesByMaterials[ $objSale->material_id ][ $objSale->date_sale ][] = [ 
				'id' => $objSale->id,
				'product_group_id' => $objSale->product_group_id,
				'count' => $objSale->count,
				'revenue' => $objSale->revenue,
				'str_date_sale_MD' => (int) $varDate->format('m') . (int) $varDate->format('d'),
			];
		}
	
		$arrCurrentMonths = array_keys($arrCurrentMonths);
		// $arrCurrentDays = array_keys($arrCurrentDays);
		$arrCurrentMaterials = array_keys($arrCurrentMaterials);
		
		$arrSalesCountsByMaterialsAndDays = [];
		$arrRevenueByMaterialsAndDays = [];
		
		$intAxisYmax = 0;
		$intRevAxisYmax = 0;
		
		$arrSalesCountsByMaterialsAndDays['gold'] = [];
		$arrRevenueByMaterialsAndDays['gold'] = [];
		foreach( $arrSalesByMaterials[ 1 ] as $dateSale => $arrSales ) {
			$count_by_day = 0;
			$rev_by_day = 0;
			foreach( $arrSales as $arrSale ) {
				$count_by_day += $arrSale['count'];
				$rev_by_day += $arrSale['revenue'];
			}
			$arrSalesCountsByMaterialsAndDays['gold'][ $arrSales[0]['str_date_sale_MD'] ] = $count_by_day;
			$arrRevenueByMaterialsAndDays['gold'][ $arrSales[0]['str_date_sale_MD'] ] = $rev_by_day;
			if ( $count_by_day > $intAxisYmax ) $intAxisYmax = $count_by_day;
			if ( $rev_by_day > $intRevAxisYmax ) $intRevAxisYmax = $rev_by_day;
		}	
		
		$arrSalesCountsByMaterialsAndDays['silver'] = [];
		$arrRevenueByMaterialsAndDays['silver'] = [];
		foreach( $arrSalesByMaterials[ 2 ] as $dateSale => $arrSales ) {
			$count_by_day = 0;
			$rev_by_day = 0;
			foreach( $arrSales as $arrSale ) {
				$count_by_day += $arrSale['count'];
				$rev_by_day += $arrSale['revenue'];
			}
			$arrSalesCountsByMaterialsAndDays['silver'][ $arrSales[0]['str_date_sale_MD'] ] = $count_by_day;
			$arrRevenueByMaterialsAndDays['silver'][ $arrSales[0]['str_date_sale_MD'] ] = $rev_by_day;
			if ( $count_by_day > $intAxisYmax ) $intAxisYmax = $count_by_day;
			if ( $rev_by_day > $intRevAxisYmax ) $intRevAxisYmax = $rev_by_day;
		}
		
		$arrSalesCountsByMaterialsAndDays['platinum'] = [];
		$arrRevenueByMaterialsAndDays['platinum'] = [];
		if (!empty($arrSalesByMaterials[ 3 ])) {
			foreach( $arrSalesByMaterials[ 3 ] as $dateSale => $arrSales ) {
				$count_by_day = 0;
				$rev_by_day = 0;
				foreach( $arrSales as $arrSale ) {
					$count_by_day += $arrSale['count'];
					$rev_by_day += $arrSale['revenue'];
				}
				$arrSalesCountsByMaterialsAndDays['platinum'][ $arrSales[0]['str_date_sale_MD'] ] = $count_by_day;
				$arrRevenueByMaterialsAndDays['platinum'][ $arrSales[0]['str_date_sale_MD'] ] = $rev_by_day;
				if ( $count_by_day > $intAxisYmax ) $intAxisYmax = $count_by_day;
				if ( $rev_by_day > $intRevAxisYmax ) $intRevAxisYmax = $rev_by_day;
			}
		}		
		
		
		$data = [
			'materials' => $materials,
			'view_types' => $view_types,
			'shops' => $shops,
			'salers' => $salers,
			'arrViews' => $arrViews,
			'arrCurrentMonths' => $arrCurrentMonths,
			// 'arrCurrentDays' => $arrCurrentDays,
			'arrSalesCountsByMaterialsAndDays' => $arrSalesCountsByMaterialsAndDays,
			'arrRevenueByMaterialsAndDays' => $arrRevenueByMaterialsAndDays,
			'arrSalesCountByMonthAndGroups' => $arrSalesCountByMonthAndGroups,
			'intAxisYmax' => $intAxisYmax,
			'intRevAxisYmax' => $intRevAxisYmax,
			'intSalesCountPerMonth' => $intSalesCountPerMonth,
			'strDateToday' => $strDateToday,
		];
		
        return view('home')->with('data', $data );
    }
	
    public function table()
    {
		$dateToday = new \DateTime();
		$strDateToday = $dateToday->format('Y-m-d');
		
		$shops = DB::select('select * from shops');
		$intCountShops = count($shops);
		$strCountShops = $this->pluralForm($intCountShops, 'ювелирный салон', 'ювелирных салона', 'ювелирных салонов');
		$strResultHeaderText = $intCountShops.' '.$strCountShops;
		
		$salers = DB::select('select * from salers');
		
		$arrObjectsSumByShop = DB::select("
			SELECT sc.*, SUM(revenue) as rev, shops.name as shop_name FROM sales_counts as sc
			LEFT JOIN shops ON (shops.id = sc.shop_id)
			WHERE date_sale = STR_TO_DATE('2019-07-05', '%Y-%m-%d')
			GROUP BY shop_id
		");
			
		$arrObjectsSumByPaymentType = DB::select("
			SELECT sc.*, SUM(revenue) as rev, pt.name as payment_type FROM sales_counts as sc
			LEFT JOIN payment_types as pt ON (pt.id = sc.payment_type_id)
			WHERE date_sale = STR_TO_DATE('2019-07-05', '%Y-%m-%d')
			GROUP BY payment_type_id;
		");
		
		$arrObjectsSumByProductGroup = DB::select("
			SELECT sc.*, SUM(revenue) as rev, pg.name as payment_type, m.name as material FROM sales_counts as sc
			LEFT JOIN product_groups as pg ON (pg.id = sc.product_group_id)
			LEFT JOIN materials as m ON (m.id = pg.material_id)			
			WHERE date_sale = STR_TO_DATE('2019-07-05', '%Y-%m-%d')
			GROUP BY product_group_id;
		");

		$data = [
			'strDateToday' => $strDateToday,
			'strResultHeaderText' => $strResultHeaderText,
			'salers' => $salers,
			'arrObjectsSumByShop' => $arrObjectsSumByShop,
			'arrObjectsSumByPaymentType' => $arrObjectsSumByPaymentType,
			'arrObjectsSumByProductGroup' => $arrObjectsSumByProductGroup,
		];
	
		return view('table')->with( $data );
	}
		
	private function pluralForm($num, $form_for_1, $form_for_2, $form_for_5) {
		$num = abs($num) % 100; // берем число по модулю и сбрасываем сотни (делим на 100, а остаток присваиваем переменной $num)
		$num_x = $num % 10; // сбрасываем десятки и записываем в новую переменную
		if ($num > 10 && $num < 20) return $form_for_5; // если число принадлежит отрезку [11;19]
		if ($num_x > 1 && $num_x < 5) return $form_for_2; // иначе если число оканчивается на 2,3,4
		if ($num_x == 1) return $form_for_1; // иначе если оканчивается на 1
		return $form_for_5;
	}
}
