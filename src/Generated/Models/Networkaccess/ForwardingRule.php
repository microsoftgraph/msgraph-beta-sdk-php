<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ForwardingRule extends PolicyRule implements Parsable 
{
    /**
     * Instantiates a new ForwardingRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.forwardingRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ForwardingRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ForwardingRule {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.networkaccess.internetAccessForwardingRule': return new InternetAccessForwardingRule();
                case '#microsoft.graph.networkaccess.m365ForwardingRule': return new M365ForwardingRule();
                case '#microsoft.graph.networkaccess.privateAccessForwardingRule': return new PrivateAccessForwardingRule();
            }
        }
        return new ForwardingRule();
    }

    /**
     * Gets the action property value. The action property
     * @return ForwardingRuleAction|null
    */
    public function getAction(): ?ForwardingRuleAction {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof ForwardingRuleAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
    }

    /**
     * Gets the clientFallbackAction property value. The clientFallbackAction property
     * @return ClientFallbackAction|null
    */
    public function getClientFallbackAction(): ?ClientFallbackAction {
        $val = $this->getBackingStore()->get('clientFallbackAction');
        if (is_null($val) || $val instanceof ClientFallbackAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientFallbackAction'");
    }

    /**
     * Gets the destinations property value. Destinations maintain a list of potential destinations and destination types that the user may access within the context of a network filtering policy. This includes IP addresses and fully qualified domain names (FQDNs)/URLs.
     * @return array<RuleDestination>|null
    */
    public function getDestinations(): ?array {
        $val = $this->getBackingStore()->get('destinations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RuleDestination::class);
            /** @var array<RuleDestination>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(ForwardingRuleAction::class)),
            'clientFallbackAction' => fn(ParseNode $n) => $o->setClientFallbackAction($n->getEnumValue(ClientFallbackAction::class)),
            'destinations' => fn(ParseNode $n) => $o->setDestinations($n->getCollectionOfObjectValues([RuleDestination::class, 'createFromDiscriminatorValue'])),
            'ruleType' => fn(ParseNode $n) => $o->setRuleType($n->getEnumValue(NetworkDestinationType::class)),
        ]);
    }

    /**
     * Gets the ruleType property value. The ruleType property
     * @return NetworkDestinationType|null
    */
    public function getRuleType(): ?NetworkDestinationType {
        $val = $this->getBackingStore()->get('ruleType');
        if (is_null($val) || $val instanceof NetworkDestinationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ruleType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeEnumValue('clientFallbackAction', $this->getClientFallbackAction());
        $writer->writeCollectionOfObjectValues('destinations', $this->getDestinations());
        $writer->writeEnumValue('ruleType', $this->getRuleType());
    }

    /**
     * Sets the action property value. The action property
     * @param ForwardingRuleAction|null $value Value to set for the action property.
    */
    public function setAction(?ForwardingRuleAction $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the clientFallbackAction property value. The clientFallbackAction property
     * @param ClientFallbackAction|null $value Value to set for the clientFallbackAction property.
    */
    public function setClientFallbackAction(?ClientFallbackAction $value): void {
        $this->getBackingStore()->set('clientFallbackAction', $value);
    }

    /**
     * Sets the destinations property value. Destinations maintain a list of potential destinations and destination types that the user may access within the context of a network filtering policy. This includes IP addresses and fully qualified domain names (FQDNs)/URLs.
     * @param array<RuleDestination>|null $value Value to set for the destinations property.
    */
    public function setDestinations(?array $value): void {
        $this->getBackingStore()->set('destinations', $value);
    }

    /**
     * Sets the ruleType property value. The ruleType property
     * @param NetworkDestinationType|null $value Value to set for the ruleType property.
    */
    public function setRuleType(?NetworkDestinationType $value): void {
        $this->getBackingStore()->set('ruleType', $value);
    }

}
