<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Security extends Entity implements Parsable 
{
    /**
     * @var InformationProtection|null $informationProtection The informationProtection property
    */
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Security {
        return new Security();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'informationProtection' => function (ParseNode $n) use ($o) { $o->setInformationProtection($n->getObjectValue(array(InformationProtection::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the informationProtection property value. The informationProtection property
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
     * Sets the informationProtection property value. The informationProtection property
     *  @param InformationProtection|null $value Value to set for the informationProtection property.
    */
    public function setInformationProtection(?InformationProtection $value ): void {
        $this->informationProtection = $value;
    }

}
