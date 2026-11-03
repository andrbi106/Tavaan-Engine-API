<?php

declare(strict_types=1);

namespace Tavaan\Engine\Api\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Api\OpenApiGenerator;
use Tavaan\Engine\Api\JsonResource;

/**
 * T-NN scenario tests for the api engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class ApiScenarioTest extends TestCase
{'    public function t01_openapi_generate_includes_path(): void\n    {\n        // Scenario T-01\n$gen = new OpenApiGenerator();\n        $gen->generate("get", "/users", ["summary" => "List users"]);\n        $json = $gen->toJson();\n        $this->assertStringContainsString("/users", $json);\n    }\n    public function t02_openapi_to_yaml_multiline(): void\n    {\n        // Scenario T-02\n$gen = new OpenApiGenerator();\n        $gen->generate("post", "/orders");\n        $yaml = $gen->toYaml();\n        $this->assertStringContainsString("openapi:", $yaml);\n        $this->assertStringContainsString("3.0.3", $yaml);\n        $this->assertStringContainsString("/orders", $yaml);\n    }\n    public function t03_json_resource_make_single(): void\n    {\n        // Scenario T-03\n$r = JsonResource::make(["id" => 1, "name" => "Ali"]);\n        $arr = $r->toArray();\n        $this->assertSame(1, $arr["id"]);\n        $this->assertSame("Ali", $arr["name"]);\n    }\n    public function t04_json_resource_collection_count(): void\n    {\n        // Scenario T-04\n$coll = JsonResource::collection([["id" => 1], ["id" => 2], ["id" => 3]]);\n        $this->assertCount(3, $coll);\n        $this->assertInstanceOf(JsonResource::class, $coll[0]);\n    }\n    public function t05_when_returns_value_or_default(): void\n    {\n        // Scenario T-05\n$r = JsonResource::make(null);\n        $this->assertSame("yes", $r->when(true, "yes", "no"));\n        $this->assertSame("no", $r->when(false, "yes", "no"));\n    }'}
