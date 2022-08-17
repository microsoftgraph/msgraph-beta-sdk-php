<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class StrongAuthenticationDetail extends Entity implements Parsable 
{
    /**
     * @var StreamInterface|null $encryptedPinHashHistory The encryptedPinHashHistory property
    */
    private ?StreamInterface $encryptedPinHashHistory = null;
    
    /**
     * @var int|null $proofupTime The proofupTime property
    */
    private ?int $proofupTime = null;
    
    /**
     * Instantiates a new StrongAuthenticationDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.strongAuthenticationDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StrongAuthenticationDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StrongAuthenticationDetail {
        return new StrongAuthenticationDetail();
    }

    /**
     * Gets the encryptedPinHashHistory property value. The encryptedPinHashHistory property
     * @return StreamInterface|null
    */
    public function getEncryptedPinHashHistory(): ?StreamInterface {
        return $this->encryptedPinHashHistory;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'encryptedPinHashHistory' => function (ParseNode $n) use ($o) { $o->setEncryptedPinHashHistory($n->getBinaryContent()); },
            'proofupTime' => function (ParseNode $n) use ($o) { $o->setProofupTime($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the proofupTime property value. The proofupTime property
     * @return int|null
    */
    public function getProofupTime(): ?int {
        return $this->proofupTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('encryptedPinHashHistory', $this->encryptedPinHashHistory);
        $writer->writeIntegerValue('proofupTime', $this->proofupTime);
    }

    /**
     * Sets the encryptedPinHashHistory property value. The encryptedPinHashHistory property
     *  @param StreamInterface|null $value Value to set for the encryptedPinHashHistory property.
    */
    public function setEncryptedPinHashHistory(?StreamInterface $value ): void {
        $this->encryptedPinHashHistory = $value;
    }

    /**
     * Sets the proofupTime property value. The proofupTime property
     *  @param int|null $value Value to set for the proofupTime property.
    */
    public function setProofupTime(?int $value ): void {
        $this->proofupTime = $value;
    }

}
