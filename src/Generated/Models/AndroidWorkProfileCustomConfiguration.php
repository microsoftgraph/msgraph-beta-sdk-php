<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidWorkProfileCustomConfiguration extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<OmaSetting>|null $omaSettings OMA settings. This collection can contain a maximum of 500 elements.
    */
    private ?array $omaSettings = null;
    
    /**
     * Instantiates a new AndroidWorkProfileCustomConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidWorkProfileCustomConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidWorkProfileCustomConfiguration {
        return new AndroidWorkProfileCustomConfiguration();
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
            'omaSettings' => function (ParseNode $n) use ($o) { $o->setOmaSettings($n->getCollectionOfObjectValues(array(OmaSetting::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the omaSettings property value. OMA settings. This collection can contain a maximum of 500 elements.
     * @return array<OmaSetting>|null
    */
    public function getOmaSettings(): ?array {
        return $this->omaSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('omaSettings', $this->omaSettings);
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
     * Sets the omaSettings property value. OMA settings. This collection can contain a maximum of 500 elements.
     *  @param array<OmaSetting>|null $value Value to set for the omaSettings property.
    */
    public function setOmaSettings(?array $value ): void {
        $this->omaSettings = $value;
    }

}
