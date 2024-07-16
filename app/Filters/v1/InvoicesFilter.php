<?php 
namespace App\Filters\v1  ;

use Illuminate\Http\Request;  
use App\Filters\ApiFilter;


class InvoicesFilter extends ApiFilter {

    protected $safeParms = [
        'customerId' => ['eq'],
        'amout' => ['eq', 'lt', 'gt', 'gte' , 'lte'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'lt', 'gt', 'gte' , 'lte'],
        'paidDate' => ['eq', 'lt', 'gt', 'gte' , 'lte'],
        
    ];

    protected $columnMap =[
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' =>  '<',
        'lte' => '≤',
        'gt' => '>',
        'gte' => '≥',
        'ne'  => '≠',
    ];

  
    
    
}