<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidPermissionAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var AndroidPermissionActionType|null $action Android action taken when an app requests a dangerous permission.
    */
    private ?AndroidPermissionActionType $action = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $permission Android permission string, defined in the official Android documentation.  Example 'android.permission.READ_CONTACTS'.
    */
    private ?string $permission = null;
    
    /**
     * Instantiates a new androidPermissionAction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.androidPermissionAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidPermissionAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidPermissionAction {
        return new AndroidPermissionAction();
    }

    /**
     * Gets the action property value. Android action taken when an app requests a dangerous permission.
     * @return AndroidPermissionActionType|null
    */
    public function getAction(): ?AndroidPermissionActionType {
        return $this->action;
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
            'action' => function (ParseNode $n) use ($o) { $o->setAction($n->getEnumValue(AndroidPermissionActionType::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'permission' => function (ParseNode $n) use ($o) { $o->setPermission($n->getStringValue()); },
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
     * Gets the permission property value. Android permission string, defined in the official Android documentation.  Example 'android.permission.READ_CONTACTS'.
     * @return string|null
    */
    public function getPermission(): ?string {
        return $this->permission;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->action);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('permission', $this->permission);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the action property value. Android action taken when an app requests a dangerous permission.
     *  @param AndroidPermissionActionType|null $value Value to set for the action property.
    */
    public function setAction(?AndroidPermissionActionType $value ): void {
        $this->action = $value;
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
     * Sets the permission property value. Android permission string, defined in the official Android documentation.  Example 'android.permission.READ_CONTACTS'.
     *  @param string|null $value Value to set for the permission property.
    */
    public function setPermission(?string $value ): void {
        $this->permission = $value;
    }

}
