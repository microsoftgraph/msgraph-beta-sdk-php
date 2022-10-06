<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Ediscoveryroot extends Entity implements Parsable 
{
    /**
     * @var array<EscapedCase>|null $cases The cases property
    */
    private ?array $cases = null;
    
    /**
     * Instantiates a new ediscoveryroot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.ediscovery.ediscoveryroot');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Ediscoveryroot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Ediscoveryroot {
        return new Ediscoveryroot();
    }

    /**
     * Gets the cases property value. The cases property
     * @return array<EscapedCase>|null
    */
    public function getCases(): ?array {
        return $this->cases;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cases' => function (ParseNode $n) use ($o) { $o->setCases($n->getCollectionOfObjectValues(array(EscapedCase::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('cases', $this->cases);
    }

    /**
     * Sets the cases property value. The cases property
     *  @param array<EscapedCase>|null $value Value to set for the cases property.
    */
    public function setCases(?array $value ): void {
        $this->cases = $value;
    }

}
