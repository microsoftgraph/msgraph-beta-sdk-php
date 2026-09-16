<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConditionalAccessAgents implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ConditionalAccessAgents and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessAgents
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessAgents {
        return new ConditionalAccessAgents();
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
     * Gets the agentFilter property value. The agentFilter property
     * @return ConditionalAccessFilter|null
    */
    public function getAgentFilter(): ?ConditionalAccessFilter {
        $val = $this->getBackingStore()->get('agentFilter');
        if (is_null($val) || $val instanceof ConditionalAccessFilter) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentFilter'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the excludeAgentUsers property value. The excludeAgentUsers property
     * @return array<string>|null
    */
    public function getExcludeAgentUsers(): ?array {
        $val = $this->getBackingStore()->get('excludeAgentUsers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludeAgentUsers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'agentFilter' => fn(ParseNode $n) => $o->setAgentFilter($n->getObjectValue([ConditionalAccessFilter::class, 'createFromDiscriminatorValue'])),
            'excludeAgentUsers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExcludeAgentUsers($val);
            },
            'includeAgentUsers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setIncludeAgentUsers($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the includeAgentUsers property value. The includeAgentUsers property
     * @return array<string>|null
    */
    public function getIncludeAgentUsers(): ?array {
        $val = $this->getBackingStore()->get('includeAgentUsers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeAgentUsers'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('agentFilter', $this->getAgentFilter());
        $writer->writeCollectionOfPrimitiveValues('excludeAgentUsers', $this->getExcludeAgentUsers());
        $writer->writeCollectionOfPrimitiveValues('includeAgentUsers', $this->getIncludeAgentUsers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the agentFilter property value. The agentFilter property
     * @param ConditionalAccessFilter|null $value Value to set for the agentFilter property.
    */
    public function setAgentFilter(?ConditionalAccessFilter $value): void {
        $this->getBackingStore()->set('agentFilter', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the excludeAgentUsers property value. The excludeAgentUsers property
     * @param array<string>|null $value Value to set for the excludeAgentUsers property.
    */
    public function setExcludeAgentUsers(?array $value): void {
        $this->getBackingStore()->set('excludeAgentUsers', $value);
    }

    /**
     * Sets the includeAgentUsers property value. The includeAgentUsers property
     * @param array<string>|null $value Value to set for the includeAgentUsers property.
    */
    public function setIncludeAgentUsers(?array $value): void {
        $this->getBackingStore()->set('includeAgentUsers', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
