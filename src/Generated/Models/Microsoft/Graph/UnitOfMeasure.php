<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnitOfMeasure extends Entity 
{
    /** @var string|null $code  */
    private ?string $code = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var string|null $internationalStandardCode  */
    private ?string $internationalStandardCode = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * Instantiates a new unitOfMeasure and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnitOfMeasure
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnitOfMeasure {
        return new UnitOfMeasure();
    }

    /**
     * Gets the code property value. 
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'code' => function (self $o, ParseNode $n) { $o->setCode($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'internationalStandardCode' => function (self $o, ParseNode $n) { $o->setInternationalStandardCode($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the internationalStandardCode property value. 
     * @return string|null
    */
    public function getInternationalStandardCode(): ?string {
        return $this->internationalStandardCode;
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('code', $this->code);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('internationalStandardCode', $this->internationalStandardCode);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
    }

    /**
     * Sets the code property value. 
     *  @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the internationalStandardCode property value. 
     *  @param string|null $value Value to set for the internationalStandardCode property.
    */
    public function setInternationalStandardCode(?string $value ): void {
        $this->internationalStandardCode = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

}
