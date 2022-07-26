<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSSingleSignOnExtension extends SingleSignOnExtension implements Parsable 
{
    /**
     * Instantiates a new MacOSSingleSignOnExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSSingleSignOnExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSSingleSignOnExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSSingleSignOnExtension {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.macOSAzureAdSingleSignOnExtension': return new MacOSAzureAdSingleSignOnExtension();
                case '#microsoft.graph.macOSCredentialSingleSignOnExtension': return new MacOSCredentialSingleSignOnExtension();
                case '#microsoft.graph.macOSKerberosSingleSignOnExtension': return new MacOSKerberosSingleSignOnExtension();
                case '#microsoft.graph.macOSRedirectSingleSignOnExtension': return new MacOSRedirectSingleSignOnExtension();
            }
        }
        return new MacOSSingleSignOnExtension();
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
