<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Agent extends Entity implements Parsable 
{
    /**
     * Instantiates a new Agent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Agent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Agent {
        return new Agent();
    }

    /**
     * Gets the copilotTools property value. The copilotTools property
     * @return array<CopilotTool>|null
    */
    public function getCopilotTools(): ?array {
        $val = $this->getBackingStore()->get('copilotTools');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CopilotTool::class);
            /** @var array<CopilotTool>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'copilotTools'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'copilotTools' => fn(ParseNode $n) => $o->setCopilotTools($n->getCollectionOfObjectValues([CopilotTool::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('copilotTools', $this->getCopilotTools());
    }

    /**
     * Sets the copilotTools property value. The copilotTools property
     * @param array<CopilotTool>|null $value Value to set for the copilotTools property.
    */
    public function setCopilotTools(?array $value): void {
        $this->getBackingStore()->set('copilotTools', $value);
    }

}
