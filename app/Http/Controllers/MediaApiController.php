<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Enums\LoanPurposeEnum;
use App\Enums\CommonEnum;
use App\Enums\TitleEnum;
use App\Enums\GenderEnum;
use App\Enums\MaritalEnum;
use App\Enums\ResidentialStatusEnum;
use App\Enums\MobileTypeEnum;
use App\Enums\EmploymentStatusEnum;
use App\Enums\PaymentFrequencyEnum;
use App\Enums\PaymentMethodEnum;
use App\Enums\EmploymentIndustryEnum;
use App\Enums\BankNameEnum;
use App\Enums\BankCardTypeEnum;


/*
| The purpose of this class MediaApiController is to send a JSON API request to the server and
|  also return a JSON API response.
*/
class MediaApiController extends Controller
{
    /**
     * Test lead or not
     *
     * @var testLead
     */
    private int $testLead;

    /**
     * Affiliate ID
     *
     * @var affId
     */
    private int $affId;

    /**
     * Affiliate password
     *
     * @var affPassword
     */
    private string $affPassword;

    /**
     * Sub ID
     *
     * @var subId
     */
    private string $subId;

    /**
     * Referring Website
     *
     * @var referringWebsite
     */
    private string $referringWebsite;

    /**
     * Loan purpose
     *
     * @var loanPurpose
     */
    private string $loanPurpose;

    /**
     * Loan amount
     *
     * @var loanAmount
     */
    private int $loanAmount;

    /**
     * Loan term
     *
     * @var loanTerm
     */
    private int $loanTerm;

    /**
     * Guarantor
     *
     * @var guarantor
     */
    private string $guarantor;

    /**
     * Salutation
     *
     * @var title
     */
    private string $title;

    /**
     * First name
     *
     * @var firstName
     */
    private string $firstName;

    /**
     * Middle name
     *
     * @var middleName
     */
    private string $middleName;

    /**
     * Last name
     *
     * @var lastName
     */
    private string $lastName;

    /**
     * D.O.B
     *
     * @var dateOfBirth
     */
    private string $dateOfBirth;

    /**
     * Marital status
     *
     * @var maritalStatus
     */
    private string $maritalStatus;

    /**
     * Dependents
     *
     * @var noOfDependants
     */
    private int $noOfDependants;

    /**
     * House Number
     *
     * @var houseNumber
     */
    private int $houseNumber;

    /**
     * House name
     *
     * @var houseName
     */
    private string $houseName;

    /**
     * Flat number
     *
     * @var flatNumber
     */
    private int $flatNumber;

    /**
     * Street name
     *
     * @var streetName
     */
    private string $streetName;

    /**
     * City
     *
     * @var city
     */
    private string $city;

    /**
     * County
     *
     * @var county
     */
    private string $county;

    /**
     * PostCode
     *
     * @var postCode
     */
    private string $postCode;

    /**
     * Residential status
     *
     * @var residentialStatus
     */
    private string $residentialStatus;

    /**
     * Address move in date
     *
     * @var addressMDate
     */
    private string $addressMDate;

    /**
     * mobile
     *
     * @var mobile
     */
    private string $mobile;

    /**
     * Mobile type
     *
     * @var mobileType
     */
    private string $mobileType;

    /**
     * Home number
     *
     * @var homeNumber
     */
    private string $homeNumber;

    /**
     * Work number
     *
     * @var workNumber
     */
    private string $workNumber;

    /**
     * Email
     *
     * @var email
     */
    private string $email;

    /**
     * Employment
     *
     * @var employment
     */
    private string $employment;

    /**
     * Payment frequency
     *
     * @var paymentFrequency
     */
    private string $paymentFrequency;

    /**
     * Payment method
     *
     * @var paymentMethod
     */
    private string $paymentMethod;

    /**
     * Monthly income
     *
     * @var monthlyIncome
     */
    private float $monthlyIncome;

    /**
     * Next pay date
     *
     * @var nextPDate
     */
    private $nextPDate;

    /**
     * Following pay date
     *
     * @var followingPDate
     */
    private string $followingPDate;

    /**
     * Job title
     *
     * @var jobTitle
     */
    private string $jobTitle;

    /**
     * Employer name
     *
     * @var employerName
     */
    private string $employerName;

    /**
     * Employer industry
     *
     * @var employerIndustry
     */
    private string $employerIndustry;

    /**
     * Employment start date
     *
     * @var employmentDate
     */
    private string $employmentDate;

    /**
     * Expenditure housing
     *
     * @var expenditureHousing
     */
    private float $expenditureHousing;

    /**
     * Expenditure credit
     *
     * @var expenditureCredit
     */
    private float $expenditureCredit;

    /**
     * Expenditure transport
     *
     * @var expenditureTransport
     */
    private float $expenditureTransport;

    /**
     * Expenditure food
     *
     * @var expenditureFood
     */
    private float $expenditureFood;

    /**
     * Expenditure utilities
     *
     * @var expenditureUtilities
     */
    private float $expenditureUtilities;

    /**
     * Expenditure other
     *
     * @var expenditureOther
     */
    private float $expenditureOther;

    /**
     * Bank name
     *
     * @var bankName
     */
    private string $bankName;

    /**
     * Bank account number
     *
     * @var bankAccount
     */
    private string $bankAccount;

    /**
     * Bank sort code
     *
     * @var bankSort
     */
    private string $bankSort;

    /**
     * Bank card type
     *
     * @var bankCardType
     */
    private string $bankCardType;

    /**
     * Consent email
     *
     * @var consentEmail
     */
    private string $consentEmail;

    /**
     * Consent email sms
     *
     * @var consentEmailSms
     */
    private int $consentEmailSms;

    /**
     * Consent sms
     *
     * @var consentSms
     */
    private int $consentSms;

    /**
     * Consent call
     *
     * @var consentCall
     */
    private int $consentCall;

    /**
     * Consent credit search
     *
     * @var consentCreditSearch
     */
    private $consentCreditSearch;

    /**
     * Consent financial
     *
     * @var consentFinancial
     */
    private string $consentFinancial;

    /**
     * User agent
     *
     * @var userAgent
     */
    private string $userAgent;

    /**
     * User agent
     *
     * @var ipAddress
     */
    private string $ipAddress;

    /**
     * To generate fake data
     *
     * @var faker
     */
    private $faker;

    /**
     * To generate fake data
     *
     * @var requestApi
     */
    private array $apiRequest;

    /**
     * Api URL
     *
     * @var requestApi
     */
    private string $apiURL;

    /**
     * Constructor to initiate values for the variables.
     */
    public function __construct()
    {
        $this->faker = Faker::create();
        $this->affId = intval(env("TEST_AFF_ID"));
        $this->subId = $this->faker->regexify('[A-Z]{5}[0-4]{3}');
        $this->referringWebsite = env('TEST_FAKE_WEBSITE');
        $this->loanAmount = $this->faker->randomNumber(5, true);
        $this->loanPurpose = LoanPurposeEnum::randomValue();
        $this->loanTerm = $this->faker->randomDigit();
        $this->guarantor = CommonEnum::randomValue();
        $this->title = TitleEnum::randomValue();
        $this->firstName = $this->faker->firstName();
        $this->middleName = "";
        $this->lastName = $this->faker->lastName();
        $this->gender = GenderEnum::randomValue();        
        //$this->dateOfBirth = $this->faker->dateTime('+1 month')->format('d-m-Y');
        $this->dateOfBirth = Carbon::now()->subYears(25)->format('d-m-Y');
        $this->maritalStatus = MaritalEnum::randomValue();
        $this->noOfDependants = $this->faker->randomDigit();
        $this->houseNumber = $this->faker->randomDigit();        
        $this->houseName = $this->faker->word();
        $this->flatNumber = $this->faker->randomDigit();
        $this->streetName = $this->faker->sentence();
        $this->city = $this->faker->city();
        $this->county = $this->faker->country();
        $this->postCode = $this->faker->bothify('?#??##');
        $this->residentialStatus = ResidentialStatusEnum::randomValue();
        $this->addressMDate = $this->faker->date('d-m-Y');
        $this->mobile = env('TEST_MOBILE_NUMBER');
        $this->mobileType = MobileTypeEnum::randomValue();
        $this->homeNumber = env('TEST_MOBILE_NUMBER');
        $this->workNumber = env('TEST_MOBILE_NUMBER');
        $this->email = $this->faker->email();
        $this->employment = EmploymentStatusEnum::randomValue();
        $this->paymentFrequency = PaymentFrequencyEnum::randomValue();
        $this->paymentMethod = PaymentMethodEnum::randomValue();
        $this->monthlyIncome = $this->faker->randomNumber(4, true);        
        $this->nextPDate = $this->faker->dateTimeBetween('+1 week', '+1 month')->format('d-m-Y');
        $this->followingPDate = $this->faker->dateTimeBetween('+3 week', '+2 month')->format('d-m-Y');
        $this->jobTitle = $this->faker->text(10);
        $this->employerName = $this->faker->word();
        $this->employerIndustry = EmploymentIndustryEnum::randomValue();
        $this->employmentDate = $this->faker->date('d-m-Y');
        $this->expenditureHousing = $this->faker->randomNumber(3, true);
        $this->expenditureCredit = $this->faker->randomNumber(2, true);
        $this->expenditureTransport = $this->faker->randomNumber(2, true);
        $this->expenditureFood = $this->faker->randomNumber(2, true);
        $this->expenditureUtilities = $this->faker->randomNumber(2, true);
        $this->expenditureOther = $this->faker->randomNumber(2, true);
        $this->bankName = BankNameEnum::randomValue();
        $this->bankAccount = strval($this->faker->randomNumber(8, true));
        $this->bankSort = env('TEST_SORT_CODDE');
        $this->bankCardType = BankCardTypeEnum::randomValue();
        $this->consentEmail = CommonEnum::randomValue();
        $this->consentEmailSms = intval(CommonEnum::randomValue());
        $this->consentSms = intval(CommonEnum::randomValue());
        $this->consentCall = intval(CommonEnum::randomValue());
        $this->consentCreditSearch = true;
        $this->consentFinancial = CommonEnum::randomValue();
        $this->userAgent = BankCardTypeEnum::randomValue();
        $this->ip_address = getenv("REMOTE_ADDR");

        if (env('TEST_LEAD') === true) {
            $this->apiURL = env('TEST_URL');
        } else {
            $this->apiURL = env('LIVE_URL');
        }
    }

    /**
     * Display the leads form to users 
     */
    public function index()
    {
        return view('leads');
    }

    /**
     * Get the API response from the server         
     *
     * @return Json|Mixed
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function generateApiResponse(): mixed
    {       
       //print_r($this->nextPDate);exit;       

       $this->apiRequest = [
                            "aff_id" => $this->affId,
                            "aff_password" => env('TEST_AFF_PASSWORD'),
                            "sub_id" => $this->subId,
                            "referring_website" => $this->referringWebsite,
                            "loan_amount" => $this->loanAmount,
                            "loan_purpose" => $this->loanPurpose,
                            "loan_term" => $this->loanTerm,
                            "guarantor" => $this->guarantor,
                            "title" => $this->title,
                            "first_name" => $this->firstName,
                            "middle_name" => $this->middleName,
                            "last_name" => $this->lastName,
                            "gender" => $this->gender,
                            "date_of_birth" => $this->dateOfBirth,
                            "marital_status" => $this->maritalStatus,
                            "number_of_dependents" => $this->noOfDependants,
                            "house_number" => $this->houseNumber,
                            "house_name" => $this->houseName,
                            "flat_number" => $this->flatNumber,
                            "street_name" => $this->streetName,
                            "city" => $this->city,
                            "county" => $this->county,
                            "post_code" => $this->postCode,
                            "residential_status" => $this->residentialStatus,
                            "address_move_in_date" => $this->addressMDate,
                            "mobile_number" => $this->mobile,
                            "home_number" => $this->homeNumber,
                            "work_number" => $this->workNumber,
                            "mobile_phone_type" => $this->mobileType,
                            "email_address" => $this->email,
                            "employment_status" => $this->employment,
                            "payment_frequency" => $this->paymentFrequency,
                            "payment_method" => $this->paymentMethod,
                            "monthly_income" => $this->monthlyIncome,
                            "next_pay_date" => $this->nextPDate,
                            "following_pay_date" => $this->followingPDate,
                            "job_title" => $this->jobTitle,
                            "employer_name" => $this->employerName,
                            "employer_industry" => $this->employerIndustry,
                            "employment_start_date" => $this->employmentDate,
                            "expenditure_housing" => $this->expenditureHousing,
                            "expenditure_credit" => $this->expenditureCredit,
                            "expenditure_transport" => $this->expenditureTransport,
                            "expenditure_food" => $this->expenditureFood,
                            "expenditure_utilities" => $this->expenditureUtilities,
                            "expenditure_other" => $this->expenditureOther,
                            "bank_name" => $this->bankName,
                            "bank_account_number" => $this->bankAccount,
                            "bank_sort_code" => $this->bankSort,
                            "bank_card_type" => $this->bankCardType,
                            "consent_email_sms" => $this->consentEmailSms,
                            "consent_email" => $this->consentEmail,
                            "consent_sms" => $this->consentSms,
                            "consent_call" => $this->consentCall,
                            "consent_credit_search" => $this->consentCreditSearch,
                            "consent_financial" => $this->consentFinancial,
                            "user_agent" => $this->userAgent,
                            "ip_address" => $this->ip_address
                            ];

        if (env('TEST_LEAD') === true) {
            $this->apiRequest['test_lead'] = true;
        }        

        $jsonResponse = $this->jsonApiResponse($this->apiRequest, $this->apiURL);
        return $jsonResponse;        
    }

    /**
     * Get the API response from the server         
     *
     * @param Request $request
     * 
     * @return Json|Mixed
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function submitAPIRequest(Request $request)
    {
        // Basic input validation
        $this->validate(request(), [
                    'title' => 'required|string|min:2',
                    'fname' => 'required|string|min:3'
        ]);

        // assign the salutation to lower case
        $this->title = strtolower($request->title);       
        // assign the first name
        $this->firstName = $request->fname;

        $this->apiRequest = [
                            "aff_id" => $this->affId,
                            "aff_password" => env('TEST_AFF_PASSWORD'),
                            "sub_id" => $this->subId,
                            "referring_website" => $this->referringWebsite,
                            "loan_amount" => $this->loanAmount,
                            "loan_purpose" => $this->loanPurpose,
                            "loan_term" => $this->loanTerm,
                            "guarantor" => $this->guarantor,
                            "title" => $this->title,
                            "first_name" => $this->firstName,
                            "middle_name" => $this->middleName,
                            "last_name" => $this->lastName,
                            "gender" => $this->gender,
                            "date_of_birth" => $this->dateOfBirth,
                            "marital_status" => $this->maritalStatus,
                            "number_of_dependents" => $this->noOfDependants,
                            "house_number" => $this->houseNumber,
                            "house_name" => $this->houseName,
                            "flat_number" => $this->flatNumber,
                            "street_name" => $this->streetName,
                            "city" => $this->city,
                            "county" => $this->county,
                            "post_code" => $this->postCode,
                            "residential_status" => $this->residentialStatus,
                            "address_move_in_date" => $this->addressMDate,
                            "mobile_number" => $this->mobile,
                            "home_number" => $this->homeNumber,
                            "work_number" => $this->workNumber,
                            "mobile_phone_type" => $this->mobileType,
                            "email_address" => $this->email,
                            "employment_status" => $this->employment,
                            "payment_frequency" => $this->paymentFrequency,
                            "payment_method" => $this->paymentMethod,
                            "monthly_income" => $this->monthlyIncome,
                            "next_pay_date" => $this->nextPDate,
                            "following_pay_date" => $this->followingPDate,
                            "job_title" => $this->jobTitle,
                            "employer_name" => $this->employerName,
                            "employer_industry" => $this->employerIndustry,
                            "employment_start_date" => $this->employmentDate,
                            "expenditure_housing" => $this->expenditureHousing,
                            "expenditure_credit" => $this->expenditureCredit,
                            "expenditure_transport" => $this->expenditureTransport,
                            "expenditure_food" => $this->expenditureFood,
                            "expenditure_utilities" => $this->expenditureUtilities,
                            "expenditure_other" => $this->expenditureOther,
                            "bank_name" => $this->bankName,
                            "bank_account_number" => $this->bankAccount,
                            "bank_sort_code" => $this->bankSort,
                            "bank_card_type" => $this->bankCardType,
                            "consent_email_sms" => $this->consentEmailSms,
                            "consent_email" => $this->consentEmail,
                            "consent_sms" => $this->consentSms,
                            "consent_call" => $this->consentCall,
                            "consent_credit_search" => $this->consentCreditSearch,
                            "consent_financial" => $this->consentFinancial,
                            "user_agent" => $this->userAgent,
                            "ip_address" => $this->ip_address
                            ];
       // dd($this->apiURL);

        if (env('TEST_LEAD') === true) {
            $this->apiRequest['test_lead'] = true;
        }        

        $jsonResponse = $this->jsonApiResponse($this->apiRequest, $this->apiURL);

        //dd($jsonResponse->body());
        return $jsonResponse;

    }

    /**
     * Send request to the server using in-built guzzle package
     *
     * @param  array $arrayRequest
     *
     * @param string $url
     *
     * @return Json|Mixed
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function jsonApiResponse(array $arrayRequest, string $url): mixed
    {
        try {
            $response = Http::withHeaders([
                                            'Content-Type' => 'application/json' 
                                         ])->post($url, $arrayRequest);
            return $response;
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

}
