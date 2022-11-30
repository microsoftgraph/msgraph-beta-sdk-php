<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the directoryAudits property value. The directoryAudits property
     * @return array<DirectoryAudit>|null
    */
    public function getDirectoryAudits(): ?array {
        return $this->getBackingStore()->get('directoryAudits');
    }

    /**
     * Gets the directoryProvisioning property value. The directoryProvisioning property
     * @return array<ProvisioningObjectSummary>|null
    */
    public function getDirectoryProvisioning(): ?array {
        return $this->getBackingStore()->get('directoryProvisioning');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'directoryAudits' => fn(ParseNode $n) => $o->setDirectoryAudits($n->getCollectionOfObjectValues([DirectoryAudit::class, 'createFromDiscriminatorValue'])),
            'directoryProvisioning' => fn(ParseNode $n) => $o->setDirectoryProvisioning($n->getCollectionOfObjectValues([ProvisioningObjectSummary::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'provisioning' => fn(ParseNode $n) => $o->setProvisioning($n->getCollectionOfObjectValues([ProvisioningObjectSummary::class, 'createFromDiscriminatorValue'])),
            'signIns' => fn(ParseNode $n) => $o->setSignIns($n->getCollectionOfObjectValues([SignIn::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the provisioning property value. The provisioning property
     * @return array<ProvisioningObjectSummary>|null
    */
    public function getProvisioning(): ?array {
        return $this->getBackingStore()->get('provisioning');
    }

    /**
     * Gets the signIns property value. The signIns property
     * @return array<SignIn>|null
    */
    public function getSignIns(): ?array {
        return $this->getBackingStore()->get('signIns');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('directoryAudits', $this->getDirectoryAudits());
        $writer->writeCollectionOfObjectValues('directoryProvisioning', $this->getDirectoryProvisioning());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('provisioning', $this->getProvisioning());
        $writer->writeCollectionOfObjectValues('signIns', $this->getSignIns());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the directoryAudits property value. The directoryAudits property
     *  @param array<DirectoryAudit>|null $value Value to set for the directoryAudits property.
    */
    public function setDirectoryAudits(?array $value): void {
        $this->getBackingStore()->set('directoryAudits', $value);
    }

    /**
     * Sets the directoryProvisioning property value. The directoryProvisioning property
     *  @param array<ProvisioningObjectSummary>|null $value Value to set for the directoryProvisioning property.
    */
    public function setDirectoryProvisioning(?array $value): void {
        $this->getBackingStore()->set('directoryProvisioning', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the provisioning property value. The provisioning property
     *  @param array<ProvisioningObjectSummary>|null $value Value to set for the provisioning property.
    */
    public function setProvisioning(?array $value): void {
        $this->getBackingStore()->set('provisioning', $value);
    }

    /**
     * Sets the signIns property value. The signIns property
     *  @param array<SignIn>|null $value Value to set for the signIns property.
    */
    public function setSignIns(?array $value): void {
        $this->getBackingStore()->set('signIns', $value);
    }

}
