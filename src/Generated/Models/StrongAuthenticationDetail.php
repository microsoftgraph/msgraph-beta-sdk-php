<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class StrongAuthenticationDetail extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
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
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
