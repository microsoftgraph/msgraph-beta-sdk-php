<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyUploadedPresentation extends GroupPolicyPresentation implements Parsable 
{
    /**
     * Instantiates a new GroupPolicyUploadedPresentation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupPolicyUploadedPresentation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyUploadedPresentation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyUploadedPresentation {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.groupPolicyPresentationCheckBox': return new GroupPolicyPresentationCheckBox();
                case '#microsoft.graph.groupPolicyPresentationComboBox': return new GroupPolicyPresentationComboBox();
                case '#microsoft.graph.groupPolicyPresentationDecimalTextBox': return new GroupPolicyPresentationDecimalTextBox();
                case '#microsoft.graph.groupPolicyPresentationDropdownList': return new GroupPolicyPresentationDropdownList();
                case '#microsoft.graph.groupPolicyPresentationListBox': return new GroupPolicyPresentationListBox();
                case '#microsoft.graph.groupPolicyPresentationLongDecimalTextBox': return new GroupPolicyPresentationLongDecimalTextBox();
                case '#microsoft.graph.groupPolicyPresentationMultiTextBox': return new GroupPolicyPresentationMultiTextBox();
                case '#microsoft.graph.groupPolicyPresentationText': return new GroupPolicyPresentationText();
                case '#microsoft.graph.groupPolicyPresentationTextBox': return new GroupPolicyPresentationTextBox();
            }
        }
        return new GroupPolicyUploadedPresentation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
