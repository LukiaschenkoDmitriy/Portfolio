<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SendMessageControllerTest extends WebTestCase
{
    private static $testData = [
        [
            "request_data" => [
                "name" => "",
                "email" => "",
                "theme" => "",
                "message" => ""
            ],
            "expected_errors" => 4
        ],
        [
            "request_data" => [
                "name" => "Vanya",
                "email" => "",
                "theme" => "",
                "message" => ""
            ],
            "expected_errors" => 3
        ],
        [
            "request_data" => [
                "name" => "",
                "email" => "myemail",
                "theme" => "",
                "message" => ""
            ],
            "expected_errors" => 3
        ],
        [
            "request_data" => [
                "name" => "",
                "email" => "",
                "theme" => "theme",
                "message" => ""
            ],
            "expected_errors" => 3
        ],
        [
            "request_data" => [
                "name" => "vanya",
                "email" => "myemail",
                "theme" => "",
                "message" => ""
            ],
            "expected_errors" => 2
        ],
        [
            "request_data" => [
                "name" => "",
                "email" => "myemail",
                "theme" => "theme",
                "message" => ""
            ],
            "expected_errors" => 2
        ],
        [
            "request_data" => [
                "name" => "vanya",
                "email" => "email",
                "theme" => "theme",
                "message" => "message"
            ],
            "expected_errors" => 1
        ],
        [
            "request_data" => [
                "name" => "vanya",
                "email" => "тип@gmail.com",
                "theme" => "theme",
                "message" => "message"
            ],
            "expected_errors" => 1
        ],
        [
            "request_data" => [
                "name" => "vaynay",
                "email" => "asdjhkqwehbkljfjqnewjfhqbweknjfqljwenfbhjn@gmail.com",
                "theme" => "qwetqdasd",
                "message" => "qwetsadf"
            ],
            "expected_errors" => 0
        ],
        [
            "request_data" => [
                "name" => "validName",
                "email" => "validemail@example.com",
                "theme" => "validTheme",
                "message" => "validMessage"
            ],
            "expected_errors" => 0
        ],
        [
            "request_data" => [
                "name" => "John Doe",
                "email" => "john.doe@example.com",
                "theme" => "Important",
                "message" => "This is an important message."
            ],
            "expected_errors" => 0
        ],
        [
            "request_data" => [
                "name" => "Alice Smith",
                "email" => "alice.smith@example.com",
                "theme" => "Urgent",
                "message" => "This is an urgent message."
            ],
            "expected_errors" => 0
        ],
        [
            "request_data" => [
                "name" => "Іван Іванов",
                "email" => "іван.іванов@example.com",
                "theme" => "Важливо",
                "message" => "Це важливе повідомлення."
            ],
            "expected_errors" => 1
        ],
        [
            "request_data" => [
                "name" => "Марія Петренко",
                "email" => "марія.петренко@example.com",
                "theme" => "Терміново",
                "message" => "Це термінове повідомлення."
            ],
            "expected_errors" => 1
        ],
    ];


    public function test_form_error(): void
    {
        $client = static::createClient();

        foreach (static::$testData as $data) {
            $crawler = $client->request('POST', '/send', $data["request_data"]);

            $inputErrors = $crawler->filter(".input-error");

            $this->assertCount($data["expected_errors"], $inputErrors);
        }
    }
}
