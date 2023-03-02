<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SynchronizationLinkedObjects implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new synchronizationLinkedObjects and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationLinkedObjects
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationLinkedObjects {
        return new SynchronizationLinkedObjects();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'manager' => fn(ParseNode $n) => $o->setManager($n->getObjectValue([SynchronizationJobSubject::class, 'createFromDiscriminatorValue'])),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([SynchronizationJobSubject::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'owners' => fn(ParseNode $n) => $o->setOwners($n->getCollectionOfObjectValues([SynchronizationJobSubject::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the manager property value. The manager property
     * @return SynchronizationJobSubject|null
    */
    public function getManager(): ?SynchronizationJobSubject {
        return $this->getBackingStore()->get('manager');
    }

    /**
     * Gets the members property value. All group members that you would like to provision.
     * @return array<SynchronizationJobSubject>|null
    */
    public function getMembers(): ?array {
        return $this->getBackingStore()->get('members');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the owners property value. The owners property
     * @return array<SynchronizationJobSubject>|null
    */
    public function getOwners(): ?array {
        return $this->getBackingStore()->get('owners');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('manager', $this->getManager());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('owners', $this->getOwners());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the manager property value. The manager property
     * @param SynchronizationJobSubject|null $value Value to set for the manager property.
    */
    public function setManager(?SynchronizationJobSubject $value): void {
        $this->getBackingStore()->set('manager', $value);
    }

    /**
     * Sets the members property value. All group members that you would like to provision.
     * @param array<SynchronizationJobSubject>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the owners property value. The owners property
     * @param array<SynchronizationJobSubject>|null $value Value to set for the owners property.
    */
    public function setOwners(?array $value): void {
        $this->getBackingStore()->set('owners', $value);
    }

}
