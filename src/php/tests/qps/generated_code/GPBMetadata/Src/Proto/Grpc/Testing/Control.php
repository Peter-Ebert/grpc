<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/control.proto

namespace GPBMetadata\Src\Proto\Grpc\Testing;

class Control
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Src\Proto\Grpc\Testing\Payloads::initOnce();
        \GPBMetadata\Src\Proto\Grpc\Testing\Stats::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0add170a247372632f70726f746f2f677270632f74657374696e672f636f" .
            "6e74726f6c2e70726f746f120c677270632e74657374696e671a25737263" .
            "2f70726f746f2f677270632f74657374696e672f7061796c6f6164732e70" .
            "726f746f1a227372632f70726f746f2f677270632f74657374696e672f73" .
            "746174732e70726f746f22250a0d506f6973736f6e506172616d7312140a" .
            "0c6f6666657265645f6c6f616418012001280122120a10436c6f7365644c" .
            "6f6f70506172616d73227b0a0a4c6f6164506172616d7312350a0b636c6f" .
            "7365645f6c6f6f7018012001280b321e2e677270632e74657374696e672e" .
            "436c6f7365644c6f6f70506172616d734800122e0a07706f6973736f6e18" .
            "022001280b321b2e677270632e74657374696e672e506f6973736f6e5061" .
            "72616d73480042060a046c6f616422430a0e536563757269747950617261" .
            "6d7312130a0b7573655f746573745f6361180120012808121c0a14736572" .
            "7665725f686f73745f6f76657272696465180220012809224d0a0a436861" .
            "6e6e656c417267120c0a046e616d6518012001280912130a097374725f76" .
            "616c7565180220012809480012130a09696e745f76616c75651803200128" .
            "05480042070a0576616c756522a0040a0c436c69656e74436f6e66696712" .
            "160a0e7365727665725f74617267657473180120032809122d0a0b636c69" .
            "656e745f7479706518022001280e32182e677270632e74657374696e672e" .
            "436c69656e745479706512350a0f73656375726974795f706172616d7318" .
            "032001280b321c2e677270632e74657374696e672e536563757269747950" .
            "6172616d7312240a1c6f75747374616e64696e675f727063735f7065725f" .
            "6368616e6e656c18042001280512170a0f636c69656e745f6368616e6e65" .
            "6c73180520012805121c0a146173796e635f636c69656e745f7468726561" .
            "647318072001280512270a087270635f7479706518082001280e32152e67" .
            "7270632e74657374696e672e52706354797065122d0a0b6c6f61645f7061" .
            "72616d73180a2001280b32182e677270632e74657374696e672e4c6f6164" .
            "506172616d7312330a0e7061796c6f61645f636f6e666967180b2001280b" .
            "321b2e677270632e74657374696e672e5061796c6f6164436f6e66696712" .
            "370a10686973746f6772616d5f706172616d73180c2001280b321d2e6772" .
            "70632e74657374696e672e486973746f6772616d506172616d7312110a09" .
            "636f72655f6c697374180d2003280512120a0a636f72655f6c696d697418" .
            "0e2001280512180a106f746865725f636c69656e745f617069180f200128" .
            "09122e0a0c6368616e6e656c5f6172677318102003280b32182e67727063" .
            "2e74657374696e672e4368616e6e656c41726722380a0c436c69656e7453" .
            "746174757312280a05737461747318012001280b32192e677270632e7465" .
            "7374696e672e436c69656e74537461747322150a044d61726b120d0a0572" .
            "6573657418012001280822680a0a436c69656e7441726773122b0a057365" .
            "74757018012001280b321a2e677270632e74657374696e672e436c69656e" .
            "74436f6e666967480012220a046d61726b18022001280b32122e67727063" .
            "2e74657374696e672e4d61726b480042090a076172677479706522b4020a" .
            "0c536572766572436f6e666967122d0a0b7365727665725f747970651801" .
            "2001280e32182e677270632e74657374696e672e53657276657254797065" .
            "12350a0f73656375726974795f706172616d7318022001280b321c2e6772" .
            "70632e74657374696e672e5365637572697479506172616d73120c0a0470" .
            "6f7274180420012805121c0a146173796e635f7365727665725f74687265" .
            "61647318072001280512120a0a636f72655f6c696d697418082001280512" .
            "330a0e7061796c6f61645f636f6e66696718092001280b321b2e67727063" .
            "2e74657374696e672e5061796c6f6164436f6e66696712110a09636f7265" .
            "5f6c697374180a2003280512180a106f746865725f7365727665725f6170" .
            "69180b20012809121c0a137265736f757263655f71756f74615f73697a65" .
            "18e9072001280522680a0a53657276657241726773122b0a057365747570" .
            "18012001280b321a2e677270632e74657374696e672e536572766572436f" .
            "6e666967480012220a046d61726b18022001280b32122e677270632e7465" .
            "7374696e672e4d61726b480042090a076172677479706522550a0c536572" .
            "76657253746174757312280a05737461747318012001280b32192e677270" .
            "632e74657374696e672e5365727665725374617473120c0a04706f727418" .
            "0220012805120d0a05636f726573180320012805220d0a0b436f72655265" .
            "7175657374221d0a0c436f7265526573706f6e7365120d0a05636f726573" .
            "18012001280522060a04566f696422fd010a085363656e6172696f120c0a" .
            "046e616d6518012001280912310a0d636c69656e745f636f6e6669671802" .
            "2001280b321a2e677270632e74657374696e672e436c69656e74436f6e66" .
            "696712130a0b6e756d5f636c69656e747318032001280512310a0d736572" .
            "7665725f636f6e66696718042001280b321a2e677270632e74657374696e" .
            "672e536572766572436f6e66696712130a0b6e756d5f7365727665727318" .
            "052001280512160a0e7761726d75705f7365636f6e647318062001280512" .
            "190a1162656e63686d61726b5f7365636f6e647318072001280512200a18" .
            "737061776e5f6c6f63616c5f776f726b65725f636f756e74180820012805" .
            "22360a095363656e6172696f7312290a097363656e6172696f7318012003" .
            "280b32162e677270632e74657374696e672e5363656e6172696f22f8020a" .
            "155363656e6172696f526573756c7453756d6d617279120b0a0371707318" .
            "0120012801121b0a137170735f7065725f7365727665725f636f72651802" .
            "20012801121a0a127365727665725f73797374656d5f74696d6518032001" .
            "280112180a107365727665725f757365725f74696d65180420012801121a" .
            "0a12636c69656e745f73797374656d5f74696d6518052001280112180a10" .
            "636c69656e745f757365725f74696d6518062001280112120a0a6c617465" .
            "6e63795f353018072001280112120a0a6c6174656e63795f393018082001" .
            "280112120a0a6c6174656e63795f393518092001280112120a0a6c617465" .
            "6e63795f3939180a2001280112130a0b6c6174656e63795f393939180b20" .
            "01280112180a107365727665725f6370755f7573616765180c2001280112" .
            "260a1e7375636365737366756c5f72657175657374735f7065725f736563" .
            "6f6e64180d2001280112220a1a6661696c65645f72657175657374735f70" .
            "65725f7365636f6e64180e200128012283030a0e5363656e6172696f5265" .
            "73756c7412280a087363656e6172696f18012001280b32162e677270632e" .
            "74657374696e672e5363656e6172696f122e0a096c6174656e6369657318" .
            "022001280b321b2e677270632e74657374696e672e486973746f6772616d" .
            "44617461122f0a0c636c69656e745f737461747318032003280b32192e67" .
            "7270632e74657374696e672e436c69656e745374617473122f0a0c736572" .
            "7665725f737461747318042003280b32192e677270632e74657374696e67" .
            "2e536572766572537461747312140a0c7365727665725f636f7265731805" .
            "2003280512340a0773756d6d61727918062001280b32232e677270632e74" .
            "657374696e672e5363656e6172696f526573756c7453756d6d6172791216" .
            "0a0e636c69656e745f7375636365737318072003280812160a0e73657276" .
            "65725f7375636365737318082003280812390a0f726571756573745f7265" .
            "73756c747318092003280b32202e677270632e74657374696e672e526571" .
            "75657374526573756c74436f756e742a410a0a436c69656e745479706512" .
            "0f0a0b53594e435f434c49454e54100012100a0c4153594e435f434c4945" .
            "4e54100112100a0c4f544845525f434c49454e5410022a5b0a0a53657276" .
            "657254797065120f0a0b53594e435f534552564552100012100a0c415359" .
            "4e435f534552564552100112180a144153594e435f47454e455249435f53" .
            "4552564552100212100a0c4f544845525f53455256455210032a230a0752" .
            "70635479706512090a05554e4152591000120d0a0953545245414d494e47" .
            "1001620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
