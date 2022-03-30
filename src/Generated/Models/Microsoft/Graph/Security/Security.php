<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Security;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Security extends Entity 
{
    /** @var InformationProtection|null $informationProtection  */
    private ?InformationProtection $informationProtection = null;
    
    /**
     * Instantiates a new security and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Security
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Security {
        return new Security();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'informationProtection' => function (self $o, ParseNode $n) { $o->setInformationProtection($n->getObjectValue(InformationProtection::class)); },
        ]);
    }

    /**
     * Gets the informationProtection property value. 
     * @return InformationProtection|null
    */
    public function getInformationProtection(): ?InformationProtection {
        return $this->informationProtection;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('informationProtection', $this->informationProtection);
    }

    /**
     * Sets the informationProtection property value. 
     *  @param InformationProtection|null $value Value to set for the informationProtection property.
    */
    public function setInformationProtection(?InformationProtection $value ): void {
        $this->informationProtection = $value;
    }

}
