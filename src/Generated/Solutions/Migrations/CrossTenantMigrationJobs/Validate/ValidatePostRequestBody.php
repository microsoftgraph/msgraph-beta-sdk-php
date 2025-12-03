<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\Migrations\CrossTenantMigrationJobs\Validate;

use Microsoft\Graph\Beta\Generated\Models\ExchangeOnlineCrossTenantMigrationSettings;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ValidatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ValidatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValidatePostRequestBody {
        return new ValidatePostRequestBody();
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
     * Gets the completeAfterDateTime property value. The completeAfterDateTime property
     * @return string|null
    */
    public function getCompleteAfterDateTime(): ?string {
        $val = $this->getBackingStore()->get('completeAfterDateTime');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completeAfterDateTime'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the exchangeSettings property value. The exchangeSettings property
     * @return ExchangeOnlineCrossTenantMigrationSettings|null
    */
    public function getExchangeSettings(): ?ExchangeOnlineCrossTenantMigrationSettings {
        $val = $this->getBackingStore()->get('exchangeSettings');
        if (is_null($val) || $val instanceof ExchangeOnlineCrossTenantMigrationSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeSettings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'completeAfterDateTime' => fn(ParseNode $n) => $o->setCompleteAfterDateTime($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'exchangeSettings' => fn(ParseNode $n) => $o->setExchangeSettings($n->getObjectValue([ExchangeOnlineCrossTenantMigrationSettings::class, 'createFromDiscriminatorValue'])),
            'resources' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResources($val);
            },
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
            'sourceTenantId' => fn(ParseNode $n) => $o->setSourceTenantId($n->getStringValue()),
            'workloads' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setWorkloads($val);
            },
        ];
    }

    /**
     * Gets the resources property value. The resources property
     * @return array<string>|null
    */
    public function getResources(): ?array {
        $val = $this->getBackingStore()->get('resources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resources'");
    }

    /**
     * Gets the resourceType property value. The resourceType property
     * @return string|null
    */
    public function getResourceType(): ?string {
        $val = $this->getBackingStore()->get('resourceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceType'");
    }

    /**
     * Gets the sourceTenantId property value. The sourceTenantId property
     * @return string|null
    */
    public function getSourceTenantId(): ?string {
        $val = $this->getBackingStore()->get('sourceTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceTenantId'");
    }

    /**
     * Gets the workloads property value. The workloads property
     * @return array<string>|null
    */
    public function getWorkloads(): ?array {
        $val = $this->getBackingStore()->get('workloads');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workloads'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('completeAfterDateTime', $this->getCompleteAfterDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('exchangeSettings', $this->getExchangeSettings());
        $writer->writeCollectionOfPrimitiveValues('resources', $this->getResources());
        $writer->writeStringValue('resourceType', $this->getResourceType());
        $writer->writeStringValue('sourceTenantId', $this->getSourceTenantId());
        $writer->writeCollectionOfPrimitiveValues('workloads', $this->getWorkloads());
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
     * Sets the completeAfterDateTime property value. The completeAfterDateTime property
     * @param string|null $value Value to set for the completeAfterDateTime property.
    */
    public function setCompleteAfterDateTime(?string $value): void {
        $this->getBackingStore()->set('completeAfterDateTime', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the exchangeSettings property value. The exchangeSettings property
     * @param ExchangeOnlineCrossTenantMigrationSettings|null $value Value to set for the exchangeSettings property.
    */
    public function setExchangeSettings(?ExchangeOnlineCrossTenantMigrationSettings $value): void {
        $this->getBackingStore()->set('exchangeSettings', $value);
    }

    /**
     * Sets the resources property value. The resources property
     * @param array<string>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

    /**
     * Sets the resourceType property value. The resourceType property
     * @param string|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?string $value): void {
        $this->getBackingStore()->set('resourceType', $value);
    }

    /**
     * Sets the sourceTenantId property value. The sourceTenantId property
     * @param string|null $value Value to set for the sourceTenantId property.
    */
    public function setSourceTenantId(?string $value): void {
        $this->getBackingStore()->set('sourceTenantId', $value);
    }

    /**
     * Sets the workloads property value. The workloads property
     * @param array<string>|null $value Value to set for the workloads property.
    */
    public function setWorkloads(?array $value): void {
        $this->getBackingStore()->set('workloads', $value);
    }

}
