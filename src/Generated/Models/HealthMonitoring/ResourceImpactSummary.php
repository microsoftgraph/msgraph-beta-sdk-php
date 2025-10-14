<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\HealthMonitoring;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ResourceImpactSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ResourceImpactSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResourceImpactSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResourceImpactSummary {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.healthMonitoring.applicationImpactSummary': return new ApplicationImpactSummary();
                case '#microsoft.graph.healthMonitoring.deviceImpactSummary': return new DeviceImpactSummary();
                case '#microsoft.graph.healthMonitoring.directoryObjectImpactSummary': return new DirectoryObjectImpactSummary();
                case '#microsoft.graph.healthMonitoring.groupImpactSummary': return new GroupImpactSummary();
                case '#microsoft.graph.healthMonitoring.servicePrincipalImpactSummary': return new ServicePrincipalImpactSummary();
                case '#microsoft.graph.healthMonitoring.userImpactSummary': return new UserImpactSummary();
            }
        }
        return new ResourceImpactSummary();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'impactedCount' => fn(ParseNode $n) => $o->setImpactedCount($n->getStringValue()),
            'impactedCountLimitExceeded' => fn(ParseNode $n) => $o->setImpactedCountLimitExceeded($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
        ];
    }

    /**
     * Gets the impactedCount property value. The number of resources impacted. The number could be an exhaustive count or a sampling count.
     * @return string|null
    */
    public function getImpactedCount(): ?string {
        $val = $this->getBackingStore()->get('impactedCount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'impactedCount'");
    }

    /**
     * Gets the impactedCountLimitExceeded property value. Indicates whether impactedCount is exhaustive or a sampling. When this value is true, the limit was exceeded and impactedCount represents a sampling; otherwise, impactedCount represents the true number of impacts.
     * @return bool|null
    */
    public function getImpactedCountLimitExceeded(): ?bool {
        $val = $this->getBackingStore()->get('impactedCountLimitExceeded');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'impactedCountLimitExceeded'");
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
     * Gets the resourceType property value. The type of resource that was impacted. Examples include user, group, application, servicePrincipal, device.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('impactedCount', $this->getImpactedCount());
        $writer->writeBooleanValue('impactedCountLimitExceeded', $this->getImpactedCountLimitExceeded());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('resourceType', $this->getResourceType());
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
     * Sets the impactedCount property value. The number of resources impacted. The number could be an exhaustive count or a sampling count.
     * @param string|null $value Value to set for the impactedCount property.
    */
    public function setImpactedCount(?string $value): void {
        $this->getBackingStore()->set('impactedCount', $value);
    }

    /**
     * Sets the impactedCountLimitExceeded property value. Indicates whether impactedCount is exhaustive or a sampling. When this value is true, the limit was exceeded and impactedCount represents a sampling; otherwise, impactedCount represents the true number of impacts.
     * @param bool|null $value Value to set for the impactedCountLimitExceeded property.
    */
    public function setImpactedCountLimitExceeded(?bool $value): void {
        $this->getBackingStore()->set('impactedCountLimitExceeded', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resourceType property value. The type of resource that was impacted. Examples include user, group, application, servicePrincipal, device.
     * @param string|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?string $value): void {
        $this->getBackingStore()->set('resourceType', $value);
    }

}
