<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceRestrictionAction extends DlpActionInfo implements Parsable 
{
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var RestrictionAction|null $restrictionAction The restrictionAction property
    */
    private ?RestrictionAction $restrictionAction = null;
    
    /**
     * @var array<RestrictionTrigger>|null $triggers The triggers property
    */
    private ?array $triggers = null;
    
    /**
     * Instantiates a new DeviceRestrictionAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceRestrictionAction');
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'restrictionAction' => fn(ParseNode $n) => $o->setRestrictionAction($n->getEnumValue(RestrictionAction::class)),
            'triggers' => fn(ParseNode $n) => $o->setTriggers($n->getCollectionOfEnumValues(RestrictionTrigger::class)),
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
     * @return array<RestrictionTrigger>|null
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
        $writer->writeCollectionOfEnumValues('triggers', $this->triggers);
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
     *  @param array<RestrictionTrigger>|null $value Value to set for the triggers property.
    */
    public function setTriggers(?array $value ): void {
        $this->triggers = $value;
    }

}
