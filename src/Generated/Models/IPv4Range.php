<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IPv4Range extends IpRange implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $lowerAddress Lower address.
    */
    private ?string $lowerAddress = null;
    
    /**
     * @var string|null $upperAddress Upper address.
    */
    private ?string $upperAddress = null;
    
    /**
     * Instantiates a new IPv4Range and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IPv4Range
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IPv4Range {
        return new IPv4Range();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lowerAddress' => function (ParseNode $n) use ($o) { $o->setLowerAddress($n->getStringValue()); },
            'upperAddress' => function (ParseNode $n) use ($o) { $o->setUpperAddress($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lowerAddress property value. Lower address.
     * @return string|null
    */
    public function getLowerAddress(): ?string {
        return $this->lowerAddress;
    }

    /**
     * Gets the upperAddress property value. Upper address.
     * @return string|null
    */
    public function getUpperAddress(): ?string {
        return $this->upperAddress;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('lowerAddress', $this->lowerAddress);
        $writer->writeStringValue('upperAddress', $this->upperAddress);
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
     * Sets the lowerAddress property value. Lower address.
     *  @param string|null $value Value to set for the lowerAddress property.
    */
    public function setLowerAddress(?string $value ): void {
        $this->lowerAddress = $value;
    }

    /**
     * Sets the upperAddress property value. Upper address.
     *  @param string|null $value Value to set for the upperAddress property.
    */
    public function setUpperAddress(?string $value ): void {
        $this->upperAddress = $value;
    }

}
