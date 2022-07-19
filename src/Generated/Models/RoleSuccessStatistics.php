<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoleSuccessStatistics implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $permanentFail The permanentFail property
    */
    private ?int $permanentFail = null;
    
    /**
     * @var int|null $permanentSuccess The permanentSuccess property
    */
    private ?int $permanentSuccess = null;
    
    /**
     * @var int|null $removeFail The removeFail property
    */
    private ?int $removeFail = null;
    
    /**
     * @var int|null $removeSuccess The removeSuccess property
    */
    private ?int $removeSuccess = null;
    
    /**
     * @var string|null $roleId The roleId property
    */
    private ?string $roleId = null;
    
    /**
     * @var string|null $roleName The roleName property
    */
    private ?string $roleName = null;
    
    /**
     * @var int|null $temporaryFail The temporaryFail property
    */
    private ?int $temporaryFail = null;
    
    /**
     * @var int|null $temporarySuccess The temporarySuccess property
    */
    private ?int $temporarySuccess = null;
    
    /**
     * @var int|null $unknownFail The unknownFail property
    */
    private ?int $unknownFail = null;
    
    /**
     * Instantiates a new roleSuccessStatistics and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.roleSuccessStatistics');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'permanentFail' => function (ParseNode $n) use ($o) { $o->setPermanentFail($n->getIntegerValue()); },
            'permanentSuccess' => function (ParseNode $n) use ($o) { $o->setPermanentSuccess($n->getIntegerValue()); },
            'removeFail' => function (ParseNode $n) use ($o) { $o->setRemoveFail($n->getIntegerValue()); },
            'removeSuccess' => function (ParseNode $n) use ($o) { $o->setRemoveSuccess($n->getIntegerValue()); },
            'roleId' => function (ParseNode $n) use ($o) { $o->setRoleId($n->getStringValue()); },
            'roleName' => function (ParseNode $n) use ($o) { $o->setRoleName($n->getStringValue()); },
            'temporaryFail' => function (ParseNode $n) use ($o) { $o->setTemporaryFail($n->getIntegerValue()); },
            'temporarySuccess' => function (ParseNode $n) use ($o) { $o->setTemporarySuccess($n->getIntegerValue()); },
            'unknownFail' => function (ParseNode $n) use ($o) { $o->setUnknownFail($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the permanentFail property value. The permanentFail property
     * @return int|null
    */
    public function getPermanentFail(): ?int {
        return $this->permanentFail;
    }

    /**
     * Gets the permanentSuccess property value. The permanentSuccess property
     * @return int|null
    */
    public function getPermanentSuccess(): ?int {
        return $this->permanentSuccess;
    }

    /**
     * Gets the removeFail property value. The removeFail property
     * @return int|null
    */
    public function getRemoveFail(): ?int {
        return $this->removeFail;
    }

    /**
     * Gets the removeSuccess property value. The removeSuccess property
     * @return int|null
    */
    public function getRemoveSuccess(): ?int {
        return $this->removeSuccess;
    }

    /**
     * Gets the roleId property value. The roleId property
     * @return string|null
    */
    public function getRoleId(): ?string {
        return $this->roleId;
    }

    /**
     * Gets the roleName property value. The roleName property
     * @return string|null
    */
    public function getRoleName(): ?string {
        return $this->roleName;
    }

    /**
     * Gets the temporaryFail property value. The temporaryFail property
     * @return int|null
    */
    public function getTemporaryFail(): ?int {
        return $this->temporaryFail;
    }

    /**
     * Gets the temporarySuccess property value. The temporarySuccess property
     * @return int|null
    */
    public function getTemporarySuccess(): ?int {
        return $this->temporarySuccess;
    }

    /**
     * Gets the unknownFail property value. The unknownFail property
     * @return int|null
    */
    public function getUnknownFail(): ?int {
        return $this->unknownFail;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('permanentFail', $this->permanentFail);
        $writer->writeIntegerValue('permanentSuccess', $this->permanentSuccess);
        $writer->writeIntegerValue('removeFail', $this->removeFail);
        $writer->writeIntegerValue('removeSuccess', $this->removeSuccess);
        $writer->writeStringValue('roleId', $this->roleId);
        $writer->writeStringValue('roleName', $this->roleName);
        $writer->writeIntegerValue('temporaryFail', $this->temporaryFail);
        $writer->writeIntegerValue('temporarySuccess', $this->temporarySuccess);
        $writer->writeIntegerValue('unknownFail', $this->unknownFail);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the permanentFail property value. The permanentFail property
     *  @param int|null $value Value to set for the permanentFail property.
    */
    public function setPermanentFail(?int $value ): void {
        $this->permanentFail = $value;
    }

    /**
     * Sets the permanentSuccess property value. The permanentSuccess property
     *  @param int|null $value Value to set for the permanentSuccess property.
    */
    public function setPermanentSuccess(?int $value ): void {
        $this->permanentSuccess = $value;
    }

    /**
     * Sets the removeFail property value. The removeFail property
     *  @param int|null $value Value to set for the removeFail property.
    */
    public function setRemoveFail(?int $value ): void {
        $this->removeFail = $value;
    }

    /**
     * Sets the removeSuccess property value. The removeSuccess property
     *  @param int|null $value Value to set for the removeSuccess property.
    */
    public function setRemoveSuccess(?int $value ): void {
        $this->removeSuccess = $value;
    }

    /**
     * Sets the roleId property value. The roleId property
     *  @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value ): void {
        $this->roleId = $value;
    }

    /**
     * Sets the roleName property value. The roleName property
     *  @param string|null $value Value to set for the roleName property.
    */
    public function setRoleName(?string $value ): void {
        $this->roleName = $value;
    }

    /**
     * Sets the temporaryFail property value. The temporaryFail property
     *  @param int|null $value Value to set for the temporaryFail property.
    */
    public function setTemporaryFail(?int $value ): void {
        $this->temporaryFail = $value;
    }

    /**
     * Sets the temporarySuccess property value. The temporarySuccess property
     *  @param int|null $value Value to set for the temporarySuccess property.
    */
    public function setTemporarySuccess(?int $value ): void {
        $this->temporarySuccess = $value;
    }

    /**
     * Sets the unknownFail property value. The unknownFail property
     *  @param int|null $value Value to set for the unknownFail property.
    */
    public function setUnknownFail(?int $value ): void {
        $this->unknownFail = $value;
    }

}
