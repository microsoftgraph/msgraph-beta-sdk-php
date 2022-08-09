<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintTask extends Entity implements Parsable 
{
    /**
     * @var PrintTaskDefinition|null $definition The definition property
    */
    private ?PrintTaskDefinition $definition = null;
    
    /**
     * @var string|null $parentUrl The URL for the print entity that triggered this task. For example, https://graph.microsoft.com/beta/print/printers/{printerId}/jobs/{jobId}. Read-only.
    */
    private ?string $parentUrl = null;
    
    /**
     * @var PrintTaskStatus|null $status The status property
    */
    private ?PrintTaskStatus $status = null;
    
    /**
     * @var PrintTaskTrigger|null $trigger The trigger property
    */
    private ?PrintTaskTrigger $trigger = null;
    
    /**
     * Instantiates a new printTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.printTask');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintTask {
        return new PrintTask();
    }

    /**
     * Gets the definition property value. The definition property
     * @return PrintTaskDefinition|null
    */
    public function getDefinition(): ?PrintTaskDefinition {
        return $this->definition;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'definition' => function (ParseNode $n) use ($o) { $o->setDefinition($n->getObjectValue(array(PrintTaskDefinition::class, 'createFromDiscriminatorValue'))); },
            'parentUrl' => function (ParseNode $n) use ($o) { $o->setParentUrl($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getObjectValue(array(PrintTaskStatus::class, 'createFromDiscriminatorValue'))); },
            'trigger' => function (ParseNode $n) use ($o) { $o->setTrigger($n->getObjectValue(array(PrintTaskTrigger::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the parentUrl property value. The URL for the print entity that triggered this task. For example, https://graph.microsoft.com/beta/print/printers/{printerId}/jobs/{jobId}. Read-only.
     * @return string|null
    */
    public function getParentUrl(): ?string {
        return $this->parentUrl;
    }

    /**
     * Gets the status property value. The status property
     * @return PrintTaskStatus|null
    */
    public function getStatus(): ?PrintTaskStatus {
        return $this->status;
    }

    /**
     * Gets the trigger property value. The trigger property
     * @return PrintTaskTrigger|null
    */
    public function getTrigger(): ?PrintTaskTrigger {
        return $this->trigger;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('definition', $this->definition);
        $writer->writeStringValue('parentUrl', $this->parentUrl);
        $writer->writeObjectValue('status', $this->status);
        $writer->writeObjectValue('trigger', $this->trigger);
    }

    /**
     * Sets the definition property value. The definition property
     *  @param PrintTaskDefinition|null $value Value to set for the definition property.
    */
    public function setDefinition(?PrintTaskDefinition $value ): void {
        $this->definition = $value;
    }

    /**
     * Sets the parentUrl property value. The URL for the print entity that triggered this task. For example, https://graph.microsoft.com/beta/print/printers/{printerId}/jobs/{jobId}. Read-only.
     *  @param string|null $value Value to set for the parentUrl property.
    */
    public function setParentUrl(?string $value ): void {
        $this->parentUrl = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param PrintTaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PrintTaskStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the trigger property value. The trigger property
     *  @param PrintTaskTrigger|null $value Value to set for the trigger property.
    */
    public function setTrigger(?PrintTaskTrigger $value ): void {
        $this->trigger = $value;
    }

}
