<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: hello.proto

namespace GPBMetadata;

class Hello
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0aad010a0b68656c6c6f2e70726f746f120444656d6f22200a0c48656c6c6f5265717565737412100a08757365726e616d65180120012809222e0a0d48656c6c6f526573706f6e7365120c0a04636f6465180220012803120f0a076d657373616765180120012809323e0a0548656c6c6f12350a0853617948656c6c6f12122e44656d6f2e48656c6c6f526571756573741a132e44656d6f2e48656c6c6f526573706f6e73652200620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
