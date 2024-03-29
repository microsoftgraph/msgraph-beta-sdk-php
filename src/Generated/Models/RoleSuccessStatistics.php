<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RoleSuccessStatistics implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RoleSuccessStatistics and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoleSuccessStatistics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoleSuccessStatistics {
        return new RoleSuccessStatistics();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'permanentFail' => fn(ParseNode $n) => $o->setPermanentFail($n->getIntegerValue()),
            'permanentSuccess' => fn(ParseNode $n) => $o->setPermanentSuccess($n->getIntegerValue()),
            'removeFail' => fn(ParseNode $n) => $o->setRemoveFail($n->getIntegerValue()),
            'removeSuccess' => fn(ParseNode $n) => $o->setRemoveSuccess($n->getIntegerValue()),
            'roleId' => fn(ParseNode $n) => $o->setRoleId($n->getStringValue()),
            'roleName' => fn(ParseNode $n) => $o->setRoleName($n->getStringValue()),
            'temporaryFail' => fn(ParseNode $n) => $o->setTemporaryFail($n->getIntegerValue()),
            'temporarySuccess' => fn(ParseNode $n) => $o->setTemporarySuccess($n->getIntegerValue()),
            'unknownFail' => fn(ParseNode $n) => $o->setUnknownFail($n->getIntegerValue()),
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
     * Gets the permanentFail property value. The permanentFail property
     * @return int|null
    */
    public function getPermanentFail(): ?int {
        $val = $this->getBackingStore()->get('permanentFail');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permanentFail'");
    }

    /**
     * Gets the permanentSuccess property value. The permanentSuccess property
     * @return int|null
    */
    public function getPermanentSuccess(): ?int {
        $val = $this->getBackingStore()->get('permanentSuccess');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permanentSuccess'");
    }

    /**
     * Gets the removeFail property value. The removeFail property
     * @return int|null
    */
    public function getRemoveFail(): ?int {
        $val = $this->getBackingStore()->get('removeFail');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'removeFail'");
    }

    /**
     * Gets the removeSuccess property value. The removeSuccess property
     * @return int|null
    */
    public function getRemoveSuccess(): ?int {
        $val = $this->getBackingStore()->get('removeSuccess');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'removeSuccess'");
    }

    /**
     * Gets the roleId property value. The roleId property
     * @return string|null
    */
    public function getRoleId(): ?string {
        $val = $this->getBackingStore()->get('roleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleId'");
    }

    /**
     * Gets the roleName property value. The roleName property
     * @return string|null
    */
    public function getRoleName(): ?string {
        $val = $this->getBackingStore()->get('roleName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleName'");
    }

    /**
     * Gets the temporaryFail property value. The temporaryFail property
     * @return int|null
    */
    public function getTemporaryFail(): ?int {
        $val = $this->getBackingStore()->get('temporaryFail');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'temporaryFail'");
    }

    /**
     * Gets the temporarySuccess property value. The temporarySuccess property
     * @return int|null
    */
    public function getTemporarySuccess(): ?int {
        $val = $this->getBackingStore()->get('temporarySuccess');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'temporarySuccess'");
    }

    /**
     * Gets the unknownFail property value. The unknownFail property
     * @return int|null
    */
    public function getUnknownFail(): ?int {
        $val = $this->getBackingStore()->get('unknownFail');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unknownFail'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('permanentFail', $this->getPermanentFail());
        $writer->writeIntegerValue('permanentSuccess', $this->getPermanentSuccess());
        $writer->writeIntegerValue('removeFail', $this->getRemoveFail());
        $writer->writeIntegerValue('removeSuccess', $this->getRemoveSuccess());
        $writer->writeStringValue('roleId', $this->getRoleId());
        $writer->writeStringValue('roleName', $this->getRoleName());
        $writer->writeIntegerValue('temporaryFail', $this->getTemporaryFail());
        $writer->writeIntegerValue('temporarySuccess', $this->getTemporarySuccess());
        $writer->writeIntegerValue('unknownFail', $this->getUnknownFail());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the permanentFail property value. The permanentFail property
     * @param int|null $value Value to set for the permanentFail property.
    */
    public function setPermanentFail(?int $value): void {
        $this->getBackingStore()->set('permanentFail', $value);
    }

    /**
     * Sets the permanentSuccess property value. The permanentSuccess property
     * @param int|null $value Value to set for the permanentSuccess property.
    */
    public function setPermanentSuccess(?int $value): void {
        $this->getBackingStore()->set('permanentSuccess', $value);
    }

    /**
     * Sets the removeFail property value. The removeFail property
     * @param int|null $value Value to set for the removeFail property.
    */
    public function setRemoveFail(?int $value): void {
        $this->getBackingStore()->set('removeFail', $value);
    }

    /**
     * Sets the removeSuccess property value. The removeSuccess property
     * @param int|null $value Value to set for the removeSuccess property.
    */
    public function setRemoveSuccess(?int $value): void {
        $this->getBackingStore()->set('removeSuccess', $value);
    }

    /**
     * Sets the roleId property value. The roleId property
     * @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value): void {
        $this->getBackingStore()->set('roleId', $value);
    }

    /**
     * Sets the roleName property value. The roleName property
     * @param string|null $value Value to set for the roleName property.
    */
    public function setRoleName(?string $value): void {
        $this->getBackingStore()->set('roleName', $value);
    }

    /**
     * Sets the temporaryFail property value. The temporaryFail property
     * @param int|null $value Value to set for the temporaryFail property.
    */
    public function setTemporaryFail(?int $value): void {
        $this->getBackingStore()->set('temporaryFail', $value);
    }

    /**
     * Sets the temporarySuccess property value. The temporarySuccess property
     * @param int|null $value Value to set for the temporarySuccess property.
    */
    public function setTemporarySuccess(?int $value): void {
        $this->getBackingStore()->set('temporarySuccess', $value);
    }

    /**
     * Sets the unknownFail property value. The unknownFail property
     * @param int|null $value Value to set for the unknownFail property.
    */
    public function setUnknownFail(?int $value): void {
        $this->getBackingStore()->set('unknownFail', $value);
    }

}
