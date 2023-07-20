<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurations\Item\AssignedAccessMultiModeProfiles;

use Microsoft\Graph\Beta\Generated\Models\WindowsAssignedAccessProfile;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AssignedAccessMultiModeProfilesPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new assignedAccessMultiModeProfilesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignedAccessMultiModeProfilesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignedAccessMultiModeProfilesPostRequestBody {
        return new AssignedAccessMultiModeProfilesPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the assignedAccessMultiModeProfiles property value. The assignedAccessMultiModeProfiles property
     * @return array<WindowsAssignedAccessProfile>|null
    */
    public function getAssignedAccessMultiModeProfiles(): ?array {
        $val = $this->getBackingStore()->get('assignedAccessMultiModeProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsAssignedAccessProfile::class);
            /** @var array<WindowsAssignedAccessProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedAccessMultiModeProfiles'");
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedAccessMultiModeProfiles' => fn(ParseNode $n) => $o->setAssignedAccessMultiModeProfiles($n->getCollectionOfObjectValues([WindowsAssignedAccessProfile::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('assignedAccessMultiModeProfiles', $this->getAssignedAccessMultiModeProfiles());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the assignedAccessMultiModeProfiles property value. The assignedAccessMultiModeProfiles property
     * @param array<WindowsAssignedAccessProfile>|null $value Value to set for the assignedAccessMultiModeProfiles property.
    */
    public function setAssignedAccessMultiModeProfiles(?array $value): void {
        $this->getBackingStore()->set('assignedAccessMultiModeProfiles', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

}
