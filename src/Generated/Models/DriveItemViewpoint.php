<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DriveItemViewpoint implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DriveItemViewpoint and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DriveItemViewpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DriveItemViewpoint {
        return new DriveItemViewpoint();
    }

    /**
     * Gets the accessOperations property value. Indicates whether the user can perform the described actions on this item.
     * @return DriveItemAccessOperationsViewpoint|null
    */
    public function getAccessOperations(): ?DriveItemAccessOperationsViewpoint {
        $val = $this->getBackingStore()->get('accessOperations');
        if (is_null($val) || $val instanceof DriveItemAccessOperationsViewpoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessOperations'");
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
            'accessOperations' => fn(ParseNode $n) => $o->setAccessOperations($n->getObjectValue([DriveItemAccessOperationsViewpoint::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sharing' => fn(ParseNode $n) => $o->setSharing($n->getObjectValue([SharingViewpoint::class, 'createFromDiscriminatorValue'])),
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
     * Gets the sharing property value. Indicates sharing operations the current user can take on the specified item.
     * @return SharingViewpoint|null
    */
    public function getSharing(): ?SharingViewpoint {
        $val = $this->getBackingStore()->get('sharing');
        if (is_null($val) || $val instanceof SharingViewpoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharing'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accessOperations', $this->getAccessOperations());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('sharing', $this->getSharing());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessOperations property value. Indicates whether the user can perform the described actions on this item.
     * @param DriveItemAccessOperationsViewpoint|null $value Value to set for the accessOperations property.
    */
    public function setAccessOperations(?DriveItemAccessOperationsViewpoint $value): void {
        $this->getBackingStore()->set('accessOperations', $value);
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sharing property value. Indicates sharing operations the current user can take on the specified item.
     * @param SharingViewpoint|null $value Value to set for the sharing property.
    */
    public function setSharing(?SharingViewpoint $value): void {
        $this->getBackingStore()->set('sharing', $value);
    }

}
