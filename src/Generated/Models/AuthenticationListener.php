<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationListener extends Entity implements Parsable 
{
    /**
     * @var int|null $priority The priority of the listener. Determines the order of evaluation when an event has multiple listeners. The priority is evaluated from low to high.
    */
    private ?int $priority = null;
    
    /**
     * @var AuthenticationSourceFilter|null $sourceFilter Filter based on the source of the authentication that is used to determine whether the listener is evaluated. This is currently limited to evaluations based on application the user is authenticating to.
    */
    private ?AuthenticationSourceFilter $sourceFilter = null;
    
    /**
     * Instantiates a new authenticationListener and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.authenticationListener');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationListener
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationListener {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.invokeUserFlowListener': return new InvokeUserFlowListener();
            }
        }
        return new AuthenticationListener();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'sourceFilter' => fn(ParseNode $n) => $o->setSourceFilter($n->getObjectValue([AuthenticationSourceFilter::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the priority property value. The priority of the listener. Determines the order of evaluation when an event has multiple listeners. The priority is evaluated from low to high.
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the sourceFilter property value. Filter based on the source of the authentication that is used to determine whether the listener is evaluated. This is currently limited to evaluations based on application the user is authenticating to.
     * @return AuthenticationSourceFilter|null
    */
    public function getSourceFilter(): ?AuthenticationSourceFilter {
        return $this->sourceFilter;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('priority', $this->priority);
        $writer->writeObjectValue('sourceFilter', $this->sourceFilter);
    }

    /**
     * Sets the priority property value. The priority of the listener. Determines the order of evaluation when an event has multiple listeners. The priority is evaluated from low to high.
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the sourceFilter property value. Filter based on the source of the authentication that is used to determine whether the listener is evaluated. This is currently limited to evaluations based on application the user is authenticating to.
     *  @param AuthenticationSourceFilter|null $value Value to set for the sourceFilter property.
    */
    public function setSourceFilter(?AuthenticationSourceFilter $value ): void {
        $this->sourceFilter = $value;
    }

}
