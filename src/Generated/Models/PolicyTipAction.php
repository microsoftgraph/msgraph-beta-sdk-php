<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyTipAction extends DlpActionInfo implements Parsable 
{
    /**
     * Instantiates a new PolicyTipAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyTipAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyTipAction {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.notifyUserAction': return new NotifyUserAction();
            }
        }
        return new PolicyTipAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'policyTip' => fn(ParseNode $n) => $o->setPolicyTip($n->getStringValue()),
        ]);
    }

    /**
     * Gets the policyTip property value. The text of the policy tip that explains what triggered the DLP policy. Developers can display this information to users in the app.
     * @return string|null
    */
    public function getPolicyTip(): ?string {
        $val = $this->getBackingStore()->get('policyTip');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyTip'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('policyTip', $this->getPolicyTip());
    }

    /**
     * Sets the policyTip property value. The text of the policy tip that explains what triggered the DLP policy. Developers can display this information to users in the app.
     * @param string|null $value Value to set for the policyTip property.
    */
    public function setPolicyTip(?string $value): void {
        $this->getBackingStore()->set('policyTip', $value);
    }

}
