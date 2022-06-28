<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceRestrictionAction extends DlpActionInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var RestrictionAction|null $restrictionAction The restrictionAction property
    */
    private ?RestrictionAction $restrictionAction = null;
    
    /**
     * @var array<string>|null $triggers The triggers property
    */
    private ?array $triggers = null;
    
    /**
     * Instantiates a new DeviceRestrictionAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceRestrictionAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceRestrictionAction {
        return new DeviceRestrictionAction();
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
        return array_merge(parent::getFieldDeserializers(), [
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getStringValue()); },
            'restrictionAction' => function (ParseNode $n) use ($o) { $o->setRestrictionAction($n->getEnumValue(RestrictionAction::class)); },
            'triggers' => function (ParseNode $n) use ($o) { $o->setTriggers($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the restrictionAction property value. The restrictionAction property
     * @return RestrictionAction|null
    */
    public function getRestrictionAction(): ?RestrictionAction {
        return $this->restrictionAction;
    }

    /**
     * Gets the triggers property value. The triggers property
     * @return array<string>|null
    */
    public function getTriggers(): ?array {
        return $this->triggers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('message', $this->message);
        $writer->writeEnumValue('restrictionAction', $this->restrictionAction);
        $writer->writeCollectionOfPrimitiveValues('triggers', $this->triggers);
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
     * Sets the message property value. The message property
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the restrictionAction property value. The restrictionAction property
     *  @param RestrictionAction|null $value Value to set for the restrictionAction property.
    */
    public function setRestrictionAction(?RestrictionAction $value ): void {
        $this->restrictionAction = $value;
    }

    /**
     * Sets the triggers property value. The triggers property
     *  @param array<string>|null $value Value to set for the triggers property.
    */
    public function setTriggers(?array $value ): void {
        $this->triggers = $value;
    }

}
