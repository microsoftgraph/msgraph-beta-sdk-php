<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationEventListener extends Entity implements Parsable 
{
    /**
     * @var string|null $authenticationEventsFlowId The authenticationEventsFlowId property
    */
    private ?string $authenticationEventsFlowId = null;
    
    /**
     * @var AuthenticationConditions|null $conditions The conditions property
    */
    private ?AuthenticationConditions $conditions = null;
    
    /**
     * @var int|null $priority The priority property
    */
    private ?int $priority = null;
    
    /**
     * @var array<KeyValuePair>|null $tags The tags property
    */
    private ?array $tags = null;
    
    /**
     * Instantiates a new authenticationEventListener and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.authenticationEventListener');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationEventListener
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationEventListener {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.onTokenIssuanceStartListener': return new OnTokenIssuanceStartListener();
            }
        }
        return new AuthenticationEventListener();
    }

    /**
     * Gets the authenticationEventsFlowId property value. The authenticationEventsFlowId property
     * @return string|null
    */
    public function getAuthenticationEventsFlowId(): ?string {
        return $this->authenticationEventsFlowId;
    }

    /**
     * Gets the conditions property value. The conditions property
     * @return AuthenticationConditions|null
    */
    public function getConditions(): ?AuthenticationConditions {
        return $this->conditions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationEventsFlowId' => fn(ParseNode $n) => $o->setAuthenticationEventsFlowId($n->getStringValue()),
            'conditions' => fn(ParseNode $n) => $o->setConditions($n->getObjectValue([AuthenticationConditions::class, 'createFromDiscriminatorValue'])),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the tags property value. The tags property
     * @return array<KeyValuePair>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('authenticationEventsFlowId', $this->authenticationEventsFlowId);
        $writer->writeObjectValue('conditions', $this->conditions);
        $writer->writeIntegerValue('priority', $this->priority);
        $writer->writeCollectionOfObjectValues('tags', $this->tags);
    }

    /**
     * Sets the authenticationEventsFlowId property value. The authenticationEventsFlowId property
     *  @param string|null $value Value to set for the authenticationEventsFlowId property.
    */
    public function setAuthenticationEventsFlowId(?string $value ): void {
        $this->authenticationEventsFlowId = $value;
    }

    /**
     * Sets the conditions property value. The conditions property
     *  @param AuthenticationConditions|null $value Value to set for the conditions property.
    */
    public function setConditions(?AuthenticationConditions $value ): void {
        $this->conditions = $value;
    }

    /**
     * Sets the priority property value. The priority property
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the tags property value. The tags property
     *  @param array<KeyValuePair>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

}
