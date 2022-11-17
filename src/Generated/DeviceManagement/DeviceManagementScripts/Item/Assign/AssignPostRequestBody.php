<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\Assign;

use Microsoft\Graph\Beta\Generated\Models\DeviceManagementScriptAssignment;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementScriptGroupAssignment;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AssignPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new assignPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignPostRequestBody {
        return new AssignPostRequestBody();
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
     * Gets the deviceManagementScriptAssignments property value. The deviceManagementScriptAssignments property
     * @return array<DeviceManagementScriptAssignment>|null
    */
    public function getDeviceManagementScriptAssignments(): ?array {
        return $this->getBackingStore()->get('deviceManagementScriptAssignments');
    }

    /**
     * Gets the deviceManagementScriptGroupAssignments property value. The deviceManagementScriptGroupAssignments property
     * @return array<DeviceManagementScriptGroupAssignment>|null
    */
    public function getDeviceManagementScriptGroupAssignments(): ?array {
        return $this->getBackingStore()->get('deviceManagementScriptGroupAssignments');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceManagementScriptAssignments' => fn(ParseNode $n) => $o->setDeviceManagementScriptAssignments($n->getCollectionOfObjectValues([DeviceManagementScriptAssignment::class, 'createFromDiscriminatorValue'])),
            'deviceManagementScriptGroupAssignments' => fn(ParseNode $n) => $o->setDeviceManagementScriptGroupAssignments($n->getCollectionOfObjectValues([DeviceManagementScriptGroupAssignment::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('deviceManagementScriptAssignments', $this->getDeviceManagementScriptAssignments());
        $writer->writeCollectionOfObjectValues('deviceManagementScriptGroupAssignments', $this->getDeviceManagementScriptGroupAssignments());
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
     * Sets the deviceManagementScriptAssignments property value. The deviceManagementScriptAssignments property
     *  @param array<DeviceManagementScriptAssignment>|null $value Value to set for the deviceManagementScriptAssignments property.
    */
    public function setDeviceManagementScriptAssignments(?array $value): void {
        $this->getBackingStore()->set('deviceManagementScriptAssignments', $value);
    }

    /**
     * Sets the deviceManagementScriptGroupAssignments property value. The deviceManagementScriptGroupAssignments property
     *  @param array<DeviceManagementScriptGroupAssignment>|null $value Value to set for the deviceManagementScriptGroupAssignments property.
    */
    public function setDeviceManagementScriptGroupAssignments(?array $value): void {
        $this->getBackingStore()->set('deviceManagementScriptGroupAssignments', $value);
    }

}
