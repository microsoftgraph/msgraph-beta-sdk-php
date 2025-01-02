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

class AuditLogRoot implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AuditLogRoot and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditLogRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditLogRoot {
        return new AuditLogRoot();
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
     * Gets the customSecurityAttributeAudits property value. Represents a custom security attribute audit log.
     * @return array<CustomSecurityAttributeAudit>|null
    */
    public function getCustomSecurityAttributeAudits(): ?array {
        $val = $this->getBackingStore()->get('customSecurityAttributeAudits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomSecurityAttributeAudit::class);
            /** @var array<CustomSecurityAttributeAudit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customSecurityAttributeAudits'");
    }

    /**
     * Gets the directoryAudits property value. The directoryAudits property
     * @return array<DirectoryAudit>|null
    */
    public function getDirectoryAudits(): ?array {
        $val = $this->getBackingStore()->get('directoryAudits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryAudit::class);
            /** @var array<DirectoryAudit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directoryAudits'");
    }

    /**
     * Gets the directoryProvisioning property value. The directoryProvisioning property
     * @return array<ProvisioningObjectSummary>|null
    */
    public function getDirectoryProvisioning(): ?array {
        $val = $this->getBackingStore()->get('directoryProvisioning');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProvisioningObjectSummary::class);
            /** @var array<ProvisioningObjectSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directoryProvisioning'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customSecurityAttributeAudits' => fn(ParseNode $n) => $o->setCustomSecurityAttributeAudits($n->getCollectionOfObjectValues([CustomSecurityAttributeAudit::class, 'createFromDiscriminatorValue'])),
            'directoryAudits' => fn(ParseNode $n) => $o->setDirectoryAudits($n->getCollectionOfObjectValues([DirectoryAudit::class, 'createFromDiscriminatorValue'])),
            'directoryProvisioning' => fn(ParseNode $n) => $o->setDirectoryProvisioning($n->getCollectionOfObjectValues([ProvisioningObjectSummary::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'provisioning' => fn(ParseNode $n) => $o->setProvisioning($n->getCollectionOfObjectValues([ProvisioningObjectSummary::class, 'createFromDiscriminatorValue'])),
            'signIns' => fn(ParseNode $n) => $o->setSignIns($n->getCollectionOfObjectValues([SignIn::class, 'createFromDiscriminatorValue'])),
            'signUps' => fn(ParseNode $n) => $o->setSignUps($n->getCollectionOfObjectValues([SelfServiceSignUp::class, 'createFromDiscriminatorValue'])),
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
     * Gets the provisioning property value. Represents an action performed by the Microsoft Entra provisioning service and its associated properties.
     * @return array<ProvisioningObjectSummary>|null
    */
    public function getProvisioning(): ?array {
        $val = $this->getBackingStore()->get('provisioning');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProvisioningObjectSummary::class);
            /** @var array<ProvisioningObjectSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisioning'");
    }

    /**
     * Gets the signIns property value. The signIns property
     * @return array<SignIn>|null
    */
    public function getSignIns(): ?array {
        $val = $this->getBackingStore()->get('signIns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SignIn::class);
            /** @var array<SignIn>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signIns'");
    }

    /**
     * Gets the signUps property value. The signUps property
     * @return array<SelfServiceSignUp>|null
    */
    public function getSignUps(): ?array {
        $val = $this->getBackingStore()->get('signUps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SelfServiceSignUp::class);
            /** @var array<SelfServiceSignUp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signUps'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('customSecurityAttributeAudits', $this->getCustomSecurityAttributeAudits());
        $writer->writeCollectionOfObjectValues('directoryAudits', $this->getDirectoryAudits());
        $writer->writeCollectionOfObjectValues('directoryProvisioning', $this->getDirectoryProvisioning());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('provisioning', $this->getProvisioning());
        $writer->writeCollectionOfObjectValues('signIns', $this->getSignIns());
        $writer->writeCollectionOfObjectValues('signUps', $this->getSignUps());
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
     * Sets the customSecurityAttributeAudits property value. Represents a custom security attribute audit log.
     * @param array<CustomSecurityAttributeAudit>|null $value Value to set for the customSecurityAttributeAudits property.
    */
    public function setCustomSecurityAttributeAudits(?array $value): void {
        $this->getBackingStore()->set('customSecurityAttributeAudits', $value);
    }

    /**
     * Sets the directoryAudits property value. The directoryAudits property
     * @param array<DirectoryAudit>|null $value Value to set for the directoryAudits property.
    */
    public function setDirectoryAudits(?array $value): void {
        $this->getBackingStore()->set('directoryAudits', $value);
    }

    /**
     * Sets the directoryProvisioning property value. The directoryProvisioning property
     * @param array<ProvisioningObjectSummary>|null $value Value to set for the directoryProvisioning property.
    */
    public function setDirectoryProvisioning(?array $value): void {
        $this->getBackingStore()->set('directoryProvisioning', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the provisioning property value. Represents an action performed by the Microsoft Entra provisioning service and its associated properties.
     * @param array<ProvisioningObjectSummary>|null $value Value to set for the provisioning property.
    */
    public function setProvisioning(?array $value): void {
        $this->getBackingStore()->set('provisioning', $value);
    }

    /**
     * Sets the signIns property value. The signIns property
     * @param array<SignIn>|null $value Value to set for the signIns property.
    */
    public function setSignIns(?array $value): void {
        $this->getBackingStore()->set('signIns', $value);
    }

    /**
     * Sets the signUps property value. The signUps property
     * @param array<SelfServiceSignUp>|null $value Value to set for the signUps property.
    */
    public function setSignUps(?array $value): void {
        $this->getBackingStore()->set('signUps', $value);
    }

}
