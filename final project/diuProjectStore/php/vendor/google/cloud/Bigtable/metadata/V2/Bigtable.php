<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace GPBMetadata\Google\Bigtable\V2;

class Bigtable
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a95180a21676f6f676c652f6269677461626c652f76322f626967746162" .
            "6c652e70726f746f1212676f6f676c652e6269677461626c652e76321a1d" .
            "676f6f676c652f6269677461626c652f76322f646174612e70726f746f1a" .
            "1e676f6f676c652f70726f746f6275662f77726170706572732e70726f74" .
            "6f1a17676f6f676c652f7270632f7374617475732e70726f746f22aa010a" .
            "0f52656164526f77735265717565737412120a0a7461626c655f6e616d65" .
            "18012001280912160a0e6170705f70726f66696c655f6964180520012809" .
            "12280a04726f777318022001280b321a2e676f6f676c652e626967746162" .
            "6c652e76322e526f77536574122d0a0666696c74657218032001280b321d" .
            "2e676f6f676c652e6269677461626c652e76322e526f7746696c74657212" .
            "120a0a726f77735f6c696d697418042001280322f8020a1052656164526f" .
            "7773526573706f6e7365123e0a066368756e6b7318012003280b322e2e67" .
            "6f6f676c652e6269677461626c652e76322e52656164526f777352657370" .
            "6f6e73652e43656c6c4368756e6b121c0a146c6173745f7363616e6e6564" .
            "5f726f775f6b657918022001280c1a85020a0943656c6c4368756e6b120f" .
            "0a07726f775f6b657918012001280c12310a0b66616d696c795f6e616d65" .
            "18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c7565122e0a097175616c696669657218032001280b321b2e676f" .
            "6f676c652e70726f746f6275662e427974657356616c756512180a107469" .
            "6d657374616d705f6d6963726f73180420012803120e0a066c6162656c73" .
            "180520032809120d0a0576616c756518062001280c12120a0a76616c7565" .
            "5f73697a6518072001280512130a0972657365745f726f77180820012808" .
            "480012140a0a636f6d6d69745f726f771809200128084800420c0a0a726f" .
            "775f73746174757322420a1453616d706c65526f774b6579735265717565" .
            "737412120a0a7461626c655f6e616d6518012001280912160a0e6170705f" .
            "70726f66696c655f6964180220012809223e0a1553616d706c65526f774b" .
            "657973526573706f6e7365120f0a07726f775f6b657918012001280c1214" .
            "0a0c6f66667365745f62797465731802200128032280010a104d75746174" .
            "65526f775265717565737412120a0a7461626c655f6e616d651801200128" .
            "0912160a0e6170705f70726f66696c655f6964180420012809120f0a0772" .
            "6f775f6b657918022001280c122f0a096d75746174696f6e731803200328" .
            "0b321c2e676f6f676c652e6269677461626c652e76322e4d75746174696f" .
            "6e22130a114d7574617465526f77526573706f6e736522c8010a114d7574" .
            "617465526f77735265717565737412120a0a7461626c655f6e616d651801" .
            "2001280912160a0e6170705f70726f66696c655f6964180320012809123c" .
            "0a07656e747269657318022003280b322b2e676f6f676c652e6269677461" .
            "626c652e76322e4d7574617465526f7773526571756573742e456e747279" .
            "1a490a05456e747279120f0a07726f775f6b657918012001280c122f0a09" .
            "6d75746174696f6e7318022003280b321c2e676f6f676c652e6269677461" .
            "626c652e76322e4d75746174696f6e228f010a124d7574617465526f7773" .
            "526573706f6e7365123d0a07656e747269657318012003280b322c2e676f" .
            "6f676c652e6269677461626c652e76322e4d7574617465526f7773526573" .
            "706f6e73652e456e7472791a3a0a05456e747279120d0a05696e64657818" .
            "012001280312220a0673746174757318022001280b32122e676f6f676c65" .
            "2e7270632e53746174757322fd010a18436865636b416e644d7574617465" .
            "526f775265717565737412120a0a7461626c655f6e616d65180120012809" .
            "12160a0e6170705f70726f66696c655f6964180720012809120f0a07726f" .
            "775f6b657918022001280c12370a107072656469636174655f66696c7465" .
            "7218062001280b321d2e676f6f676c652e6269677461626c652e76322e52" .
            "6f7746696c74657212340a0e747275655f6d75746174696f6e7318042003" .
            "280b321c2e676f6f676c652e6269677461626c652e76322e4d7574617469" .
            "6f6e12350a0f66616c73655f6d75746174696f6e7318052003280b321c2e" .
            "676f6f676c652e6269677461626c652e76322e4d75746174696f6e22360a" .
            "19436865636b416e644d7574617465526f77526573706f6e736512190a11" .
            "7072656469636174655f6d6174636865641801200128082290010a195265" .
            "61644d6f646966795772697465526f775265717565737412120a0a746162" .
            "6c655f6e616d6518012001280912160a0e6170705f70726f66696c655f69" .
            "64180420012809120f0a07726f775f6b657918022001280c12360a057275" .
            "6c657318032003280b32272e676f6f676c652e6269677461626c652e7632" .
            "2e526561644d6f64696679577269746552756c6522420a1a526561644d6f" .
            "646966795772697465526f77526573706f6e736512240a03726f77180120" .
            "01280b32172e676f6f676c652e6269677461626c652e76322e526f7732ad" .
            "080a084269677461626c65129d010a0852656164526f777312232e676f6f" .
            "676c652e6269677461626c652e76322e52656164526f7773526571756573" .
            "741a242e676f6f676c652e6269677461626c652e76322e52656164526f77" .
            "73526573706f6e7365224482d3e493023e22392f76322f7b7461626c655f" .
            "6e616d653d70726f6a656374732f2a2f696e7374616e6365732f2a2f7461" .
            "626c65732f2a7d3a72656164526f77733a012a300112ae010a0d53616d70" .
            "6c65526f774b65797312282e676f6f676c652e6269677461626c652e7632" .
            "2e53616d706c65526f774b657973526571756573741a292e676f6f676c65" .
            "2e6269677461626c652e76322e53616d706c65526f774b65797352657370" .
            "6f6e7365224682d3e4930240123e2f76322f7b7461626c655f6e616d653d" .
            "70726f6a656374732f2a2f696e7374616e6365732f2a2f7461626c65732f" .
            "2a7d3a73616d706c65526f774b6579733001129f010a094d757461746552" .
            "6f7712242e676f6f676c652e6269677461626c652e76322e4d7574617465" .
            "526f77526571756573741a252e676f6f676c652e6269677461626c652e76" .
            "322e4d7574617465526f77526573706f6e7365224582d3e493023f223a2f" .
            "76322f7b7461626c655f6e616d653d70726f6a656374732f2a2f696e7374" .
            "616e6365732f2a2f7461626c65732f2a7d3a6d7574617465526f773a012a" .
            "12a5010a0a4d7574617465526f777312252e676f6f676c652e6269677461" .
            "626c652e76322e4d7574617465526f7773526571756573741a262e676f6f" .
            "676c652e6269677461626c652e76322e4d7574617465526f777352657370" .
            "6f6e7365224682d3e4930240223b2f76322f7b7461626c655f6e616d653d" .
            "70726f6a656374732f2a2f696e7374616e6365732f2a2f7461626c65732f" .
            "2a7d3a6d7574617465526f77733a012a300112bf010a11436865636b416e" .
            "644d7574617465526f77122c2e676f6f676c652e6269677461626c652e76" .
            "322e436865636b416e644d7574617465526f77526571756573741a2d2e67" .
            "6f6f676c652e6269677461626c652e76322e436865636b416e644d757461" .
            "7465526f77526573706f6e7365224d82d3e493024722422f76322f7b7461" .
            "626c655f6e616d653d70726f6a656374732f2a2f696e7374616e6365732f" .
            "2a2f7461626c65732f2a7d3a636865636b416e644d7574617465526f773a" .
            "012a12c3010a12526561644d6f646966795772697465526f77122d2e676f" .
            "6f676c652e6269677461626c652e76322e526561644d6f64696679577269" .
            "7465526f77526571756573741a2e2e676f6f676c652e6269677461626c65" .
            "2e76322e526561644d6f646966795772697465526f77526573706f6e7365" .
            "224e82d3e493024822432f76322f7b7461626c655f6e616d653d70726f6a" .
            "656374732f2a2f696e7374616e6365732f2a2f7461626c65732f2a7d3a72" .
            "6561644d6f646966795772697465526f773a012a429b010a16636f6d2e67" .
            "6f6f676c652e6269677461626c652e7632420d4269677461626c6550726f" .
            "746f50015a3a676f6f676c652e676f6c616e672e6f72672f67656e70726f" .
            "746f2f676f6f676c65617069732f6269677461626c652f76323b62696774" .
            "61626c65aa0218476f6f676c652e436c6f75642e4269677461626c652e56" .
            "32ca0218476f6f676c655c436c6f75645c4269677461626c655c56326206" .
            "70726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

