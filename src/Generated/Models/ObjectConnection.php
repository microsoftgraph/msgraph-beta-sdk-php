<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Represents a connector data store linkage record for an object in a synchronization job.
*/
class ObjectConnection implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ObjectConnection and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ObjectConnection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ObjectConnection {
        return new ObjectConnection();
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
     * Gets the displayName property value. Display name of the connected object. Nullable. Read-only.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'objectId' => fn(ParseNode $n) => $o->setObjectId($n->getStringValue()),
            'objectTypeName' => fn(ParseNode $n) => $o->setObjectTypeName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sourceAnchor' => fn(ParseNode $n) => $o->setSourceAnchor($n->getStringValue()),
            'targetAnchor' => fn(ParseNode $n) => $o->setTargetAnchor($n->getStringValue()),
        ];
    }

    /**
     * Gets the objectId property value. Identifier supplied in the request to look up the connection. Can be the source or target identifier for the object in the synchronization job. Key. Not nullable. Read-only.
     * @return string|null
    */
    public function getObjectId(): ?string {
        $val = $this->getBackingStore()->get('objectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'objectId'");
    }

    /**
     * Gets the objectTypeName property value. Logical object type, such as User or Group. Not nullable. Read-only.
     * @return string|null
    */
    public function getObjectTypeName(): ?string {
        $val = $this->getBackingStore()->get('objectTypeName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'objectTypeName'");
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
     * Gets the sourceAnchor property value. Anchor or join value in the source directory. Not nullable. Read-only.
     * @return string|null
    */
    public function getSourceAnchor(): ?string {
        $val = $this->getBackingStore()->get('sourceAnchor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceAnchor'");
    }

    /**
     * Gets the targetAnchor property value. Anchor or transformed identifier in the target space. Not nullable. Read-only.
     * @return string|null
    */
    public function getTargetAnchor(): ?string {
        $val = $this->getBackingStore()->get('targetAnchor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetAnchor'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('objectId', $this->getObjectId());
        $writer->writeStringValue('objectTypeName', $this->getObjectTypeName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sourceAnchor', $this->getSourceAnchor());
        $writer->writeStringValue('targetAnchor', $this->getTargetAnchor());
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
     * Sets the displayName property value. Display name of the connected object. Nullable. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the objectId property value. Identifier supplied in the request to look up the connection. Can be the source or target identifier for the object in the synchronization job. Key. Not nullable. Read-only.
     * @param string|null $value Value to set for the objectId property.
    */
    public function setObjectId(?string $value): void {
        $this->getBackingStore()->set('objectId', $value);
    }

    /**
     * Sets the objectTypeName property value. Logical object type, such as User or Group. Not nullable. Read-only.
     * @param string|null $value Value to set for the objectTypeName property.
    */
    public function setObjectTypeName(?string $value): void {
        $this->getBackingStore()->set('objectTypeName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sourceAnchor property value. Anchor or join value in the source directory. Not nullable. Read-only.
     * @param string|null $value Value to set for the sourceAnchor property.
    */
    public function setSourceAnchor(?string $value): void {
        $this->getBackingStore()->set('sourceAnchor', $value);
    }

    /**
     * Sets the targetAnchor property value. Anchor or transformed identifier in the target space. Not nullable. Read-only.
     * @param string|null $value Value to set for the targetAnchor property.
    */
    public function setTargetAnchor(?string $value): void {
        $this->getBackingStore()->set('targetAnchor', $value);
    }

}
