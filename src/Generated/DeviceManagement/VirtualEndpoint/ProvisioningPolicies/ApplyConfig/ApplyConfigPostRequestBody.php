<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\ApplyConfig;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApplyConfigPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new applyConfigPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplyConfigPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplyConfigPostRequestBody {
        return new ApplyConfigPostRequestBody();
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
     * Gets the cloudPcIds property value. The cloudPcIds property
     * @return array<string>|null
    */
    public function getCloudPcIds(): ?array {
        $val = $this->getBackingStore()->get('cloudPcIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcIds'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cloudPcIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCloudPcIds($val);
            },
            'policySettings' => fn(ParseNode $n) => $o->setPolicySettings($n->getEnumValue(ApplyConfigPostRequestBody_policySettings::class)),
        ];
    }

    /**
     * Gets the policySettings property value. The policySettings property
     * @return ApplyConfigPostRequestBody_policySettings|null
    */
    public function getPolicySettings(): ?ApplyConfigPostRequestBody_policySettings {
        $val = $this->getBackingStore()->get('policySettings');
        if (is_null($val) || $val instanceof ApplyConfigPostRequestBody_policySettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policySettings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('cloudPcIds', $this->getCloudPcIds());
        $writer->writeEnumValue('policySettings', $this->getPolicySettings());
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
     * Sets the cloudPcIds property value. The cloudPcIds property
     * @param array<string>|null $value Value to set for the cloudPcIds property.
    */
    public function setCloudPcIds(?array $value): void {
        $this->getBackingStore()->set('cloudPcIds', $value);
    }

    /**
     * Sets the policySettings property value. The policySettings property
     * @param ApplyConfigPostRequestBody_policySettings|null $value Value to set for the policySettings property.
    */
    public function setPolicySettings(?ApplyConfigPostRequestBody_policySettings $value): void {
        $this->getBackingStore()->set('policySettings', $value);
    }

}
