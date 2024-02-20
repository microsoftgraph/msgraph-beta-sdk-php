<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamsAppDashboardCardContentSource implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TeamsAppDashboardCardContentSource and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppDashboardCardContentSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppDashboardCardContentSource {
        return new TeamsAppDashboardCardContentSource();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the botConfiguration property value. The botConfiguration property
     * @return TeamsAppDashboardCardBotConfiguration|null
    */
    public function getBotConfiguration(): ?TeamsAppDashboardCardBotConfiguration {
        $val = $this->getBackingStore()->get('botConfiguration');
        if (is_null($val) || $val instanceof TeamsAppDashboardCardBotConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'botConfiguration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'botConfiguration' => fn(ParseNode $n) => $o->setBotConfiguration($n->getObjectValue([TeamsAppDashboardCardBotConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sourceType' => fn(ParseNode $n) => $o->setSourceType($n->getEnumValue(TeamsAppDashboardCardSourceType::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the sourceType property value. The sourceType property
     * @return TeamsAppDashboardCardSourceType|null
    */
    public function getSourceType(): ?TeamsAppDashboardCardSourceType {
        $val = $this->getBackingStore()->get('sourceType');
        if (is_null($val) || $val instanceof TeamsAppDashboardCardSourceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('botConfiguration', $this->getBotConfiguration());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('sourceType', $this->getSourceType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the botConfiguration property value. The botConfiguration property
     * @param TeamsAppDashboardCardBotConfiguration|null $value Value to set for the botConfiguration property.
    */
    public function setBotConfiguration(?TeamsAppDashboardCardBotConfiguration $value): void {
        $this->getBackingStore()->set('botConfiguration', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sourceType property value. The sourceType property
     * @param TeamsAppDashboardCardSourceType|null $value Value to set for the sourceType property.
    */
    public function setSourceType(?TeamsAppDashboardCardSourceType $value): void {
        $this->getBackingStore()->set('sourceType', $value);
    }

}
