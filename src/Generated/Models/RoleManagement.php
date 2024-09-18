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

class RoleManagement implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RoleManagement and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoleManagement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoleManagement {
        return new RoleManagement();
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
     * Gets the cloudPC property value. The cloudPC property
     * @return RbacApplicationMultiple|null
    */
    public function getCloudPC(): ?RbacApplicationMultiple {
        $val = $this->getBackingStore()->get('cloudPC');
        if (is_null($val) || $val instanceof RbacApplicationMultiple) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPC'");
    }

    /**
     * Gets the defender property value. The defender property
     * @return RbacApplicationMultiple|null
    */
    public function getDefender(): ?RbacApplicationMultiple {
        $val = $this->getBackingStore()->get('defender');
        if (is_null($val) || $val instanceof RbacApplicationMultiple) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defender'");
    }

    /**
     * Gets the deviceManagement property value. The RbacApplication for Device Management
     * @return RbacApplicationMultiple|null
    */
    public function getDeviceManagement(): ?RbacApplicationMultiple {
        $val = $this->getBackingStore()->get('deviceManagement');
        if (is_null($val) || $val instanceof RbacApplicationMultiple) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceManagement'");
    }

    /**
     * Gets the directory property value. The directory property
     * @return RbacApplication|null
    */
    public function getDirectory(): ?RbacApplication {
        $val = $this->getBackingStore()->get('directory');
        if (is_null($val) || $val instanceof RbacApplication) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directory'");
    }

    /**
     * Gets the enterpriseApps property value. The enterpriseApps property
     * @return array<RbacApplication>|null
    */
    public function getEnterpriseApps(): ?array {
        $val = $this->getBackingStore()->get('enterpriseApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RbacApplication::class);
            /** @var array<RbacApplication>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseApps'");
    }

    /**
     * Gets the entitlementManagement property value. The RbacApplication for Entitlement Management
     * @return RbacApplication|null
    */
    public function getEntitlementManagement(): ?RbacApplication {
        $val = $this->getBackingStore()->get('entitlementManagement');
        if (is_null($val) || $val instanceof RbacApplication) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entitlementManagement'");
    }

    /**
     * Gets the exchange property value. The exchange property
     * @return UnifiedRbacApplication|null
    */
    public function getExchange(): ?UnifiedRbacApplication {
        $val = $this->getBackingStore()->get('exchange');
        if (is_null($val) || $val instanceof UnifiedRbacApplication) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchange'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cloudPC' => fn(ParseNode $n) => $o->setCloudPC($n->getObjectValue([RbacApplicationMultiple::class, 'createFromDiscriminatorValue'])),
            'defender' => fn(ParseNode $n) => $o->setDefender($n->getObjectValue([RbacApplicationMultiple::class, 'createFromDiscriminatorValue'])),
            'deviceManagement' => fn(ParseNode $n) => $o->setDeviceManagement($n->getObjectValue([RbacApplicationMultiple::class, 'createFromDiscriminatorValue'])),
            'directory' => fn(ParseNode $n) => $o->setDirectory($n->getObjectValue([RbacApplication::class, 'createFromDiscriminatorValue'])),
            'enterpriseApps' => fn(ParseNode $n) => $o->setEnterpriseApps($n->getCollectionOfObjectValues([RbacApplication::class, 'createFromDiscriminatorValue'])),
            'entitlementManagement' => fn(ParseNode $n) => $o->setEntitlementManagement($n->getObjectValue([RbacApplication::class, 'createFromDiscriminatorValue'])),
            'exchange' => fn(ParseNode $n) => $o->setExchange($n->getObjectValue([UnifiedRbacApplication::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('cloudPC', $this->getCloudPC());
        $writer->writeObjectValue('defender', $this->getDefender());
        $writer->writeObjectValue('deviceManagement', $this->getDeviceManagement());
        $writer->writeObjectValue('directory', $this->getDirectory());
        $writer->writeCollectionOfObjectValues('enterpriseApps', $this->getEnterpriseApps());
        $writer->writeObjectValue('entitlementManagement', $this->getEntitlementManagement());
        $writer->writeObjectValue('exchange', $this->getExchange());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cloudPC property value. The cloudPC property
     * @param RbacApplicationMultiple|null $value Value to set for the cloudPC property.
    */
    public function setCloudPC(?RbacApplicationMultiple $value): void {
        $this->getBackingStore()->set('cloudPC', $value);
    }

    /**
     * Sets the defender property value. The defender property
     * @param RbacApplicationMultiple|null $value Value to set for the defender property.
    */
    public function setDefender(?RbacApplicationMultiple $value): void {
        $this->getBackingStore()->set('defender', $value);
    }

    /**
     * Sets the deviceManagement property value. The RbacApplication for Device Management
     * @param RbacApplicationMultiple|null $value Value to set for the deviceManagement property.
    */
    public function setDeviceManagement(?RbacApplicationMultiple $value): void {
        $this->getBackingStore()->set('deviceManagement', $value);
    }

    /**
     * Sets the directory property value. The directory property
     * @param RbacApplication|null $value Value to set for the directory property.
    */
    public function setDirectory(?RbacApplication $value): void {
        $this->getBackingStore()->set('directory', $value);
    }

    /**
     * Sets the enterpriseApps property value. The enterpriseApps property
     * @param array<RbacApplication>|null $value Value to set for the enterpriseApps property.
    */
    public function setEnterpriseApps(?array $value): void {
        $this->getBackingStore()->set('enterpriseApps', $value);
    }

    /**
     * Sets the entitlementManagement property value. The RbacApplication for Entitlement Management
     * @param RbacApplication|null $value Value to set for the entitlementManagement property.
    */
    public function setEntitlementManagement(?RbacApplication $value): void {
        $this->getBackingStore()->set('entitlementManagement', $value);
    }

    /**
     * Sets the exchange property value. The exchange property
     * @param UnifiedRbacApplication|null $value Value to set for the exchange property.
    */
    public function setExchange(?UnifiedRbacApplication $value): void {
        $this->getBackingStore()->set('exchange', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
