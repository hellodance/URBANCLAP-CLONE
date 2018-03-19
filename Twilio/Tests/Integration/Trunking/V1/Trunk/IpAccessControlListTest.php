<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Trunking\V1\Trunk;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class IpAccessControlListTest extends HolodeckTestCase {
    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->trunking->v1->trunks("TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                       ->ipAccessControlLists("ALaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $this->assertRequest(new Request(
            'get',
            'https://trunking.twilio.com/v1/Trunks/TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/IpAccessControlLists/ALaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "friendly_name": "friendly_name",
                "sid": "ALaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "trunk_sid": "TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "url": "http://www.example.com"
            }
            '
        ));
        
        $actual = $this->twilio->trunking->v1->trunks("TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                             ->ipAccessControlLists("ALaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();
        
        $this->assertNotNull($actual);
    }

    public function testDeleteRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->trunking->v1->trunks("TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                       ->ipAccessControlLists("ALaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $this->assertRequest(new Request(
            'delete',
            'https://trunking.twilio.com/v1/Trunks/TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/IpAccessControlLists/ALaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        ));
    }

    public function testDeleteResponse() {
        $this->holodeck->mock(new Response(
            204,
            null
        ));
        
        $actual = $this->twilio->trunking->v1->trunks("TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                             ->ipAccessControlLists("ALaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->delete();
        
        $this->assertTrue($actual);
    }

    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->trunking->v1->trunks("TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                       ->ipAccessControlLists->create("ALaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $values = array(
            'IpAccessControlListSid' => "ALaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
        );
        
        $this->assertRequest(new Request(
            'post',
            'https://trunking.twilio.com/v1/Trunks/TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/IpAccessControlLists',
            null,
            $values
        ));
    }

    public function testCreateResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "friendly_name": "friendly_name",
                "sid": "ALaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "trunk_sid": "TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "url": "http://www.example.com"
            }
            '
        ));
        
        $actual = $this->twilio->trunking->v1->trunks("TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                             ->ipAccessControlLists->create("ALaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
        
        $this->assertNotNull($actual);
    }

    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->trunking->v1->trunks("TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                       ->ipAccessControlLists->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $this->assertRequest(new Request(
            'get',
            'https://trunking.twilio.com/v1/Trunks/TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/IpAccessControlLists'
        ));
    }

    public function testReadEmptyResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "ip_access_control_lists": [],
                "meta": {
                    "first_page_url": "https://trunking.twilio.com/v1/Trunks/TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/IpAccessControlLists?Page=0&PageSize=50",
                    "key": "ip_access_control_lists",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 0,
                    "previous_page_url": null,
                    "url": "https://trunking.twilio.com/v1/Trunks/TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/IpAccessControlLists"
                }
            }
            '
        ));
        
        $actual = $this->twilio->trunking->v1->trunks("TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                             ->ipAccessControlLists->read();
        
        $this->assertNotNull($actual);
    }

    public function testReadFullResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "ip_access_control_lists": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "2015-07-30T20:00:00Z",
                        "date_updated": "2015-07-30T20:00:00Z",
                        "friendly_name": "friendly_name",
                        "sid": "ALaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "trunk_sid": "TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "url": "http://www.example.com"
                    }
                ],
                "meta": {
                    "first_page_url": "https://trunking.twilio.com/v1/Trunks/TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/IpAccessControlLists?Page=0&PageSize=50",
                    "key": "ip_access_control_lists",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 1,
                    "previous_page_url": null,
                    "url": "https://trunking.twilio.com/v1/Trunks/TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/IpAccessControlLists"
                }
            }
            '
        ));
        
        $actual = $this->twilio->trunking->v1->trunks("TRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                             ->ipAccessControlLists->read();
        
        $this->assertGreaterThan(0, count($actual));
    }
}