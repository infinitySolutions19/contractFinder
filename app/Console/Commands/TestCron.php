<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use DB;
use CH;
use Mail;
use Illuminate\Support\Facades\Http;

class TestCron extends Command
{
/**
* The name and signature of the console command.
*
* @var string
*/
protected $signature = 'test:cron';
/**
* The console command description.
*
* @var string
*/
protected $description = 'test cron';
/**
* Create a new command instance.
*
* @return void
*/
public function __construct()
{
parent::__construct();
}
/**
* Execute the console command.
*
* @return int
*/

public function handle()
{
 
// Api One 

// $response = Http::get('https://irl.eu-supply.com/ctm/rss/Rss.ashx');
// $xml = simplexml_load_string($response->body());
// $json = json_encode($xml);



// Api Two

// $response = Http::get('https://irl.eu-supply.com/ctm/rss/Rss.ashx');
// $xml = simplexml_load_string($response->body());
// $json = json_encode($xml);

// $response = Http::get('https://ec.europa.eu/info/funding-tenders/opportunities/data/referenceData/grantsTenders.json');
// dd($response->body() );

 

 // Api Three
 
// $response = Http::get('https://www.contractsfinder.service.gov.uk/Published/Notices/OCDS/Search?page=1&size=20&orderBy=publishedDate&order=DESC');
// dd($response->body() );



}



}