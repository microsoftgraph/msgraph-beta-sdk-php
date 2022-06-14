<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SafeguardSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<SafeguardProfile>|null $disabledSafeguardProfiles List of safeguards to ignore per device.
    */
    private ?array $disabledSafeguardProfiles = null;
    
    /**
     * Instantiates a new safeguardSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SafeguardSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SafeguardSettings {
        return new SafeguardSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the disabledSafeguardProfiles property value. List of safeguards to ignore per device.
     * @return array<SafeguardProfile>|null
    */
    public function getDisabledSafeguardProfiles(): ?array {
        return $this->disabledSafeguardProfiles;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'disabledSafeguardProfiles' => function (ParseNode $n) use ($o) { $o->setDisabledSafeguardProfiles($n->getCollectionOfObjectValues(array(SafeguardProfile::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('disabledSafeguardProfiles', $this->disabledSafeguardProfiles);
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
     * Sets the disabledSafeguardProfiles property value. List of safeguards to ignore per device.
     *  @param array<SafeguardProfile>|null $value Value to set for the disabledSafeguardProfiles property.
    */
    public function setDisabledSafeguardProfiles(?array $value ): void {
        $this->disabledSafeguardProfiles = $value;
    }

}
