<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CasesRoot extends Entity implements Parsable 
{
    /**
     * @var array<EdiscoveryCase>|null $ediscoveryCases The ediscoveryCases property
    */
    private ?array $ediscoveryCases = null;
    
    /**
     * Instantiates a new casesRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CasesRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CasesRoot {
        return new CasesRoot();
    }

    /**
     * Gets the ediscoveryCases property value. The ediscoveryCases property
     * @return array<EdiscoveryCase>|null
    */
    public function getEdiscoveryCases(): ?array {
        return $this->ediscoveryCases;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'ediscoveryCases' => function (ParseNode $n) use ($o) { $o->setEdiscoveryCases($n->getCollectionOfObjectValues(array(EdiscoveryCase::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('ediscoveryCases', $this->ediscoveryCases);
    }

    /**
     * Sets the ediscoveryCases property value. The ediscoveryCases property
     *  @param array<EdiscoveryCase>|null $value Value to set for the ediscoveryCases property.
    */
    public function setEdiscoveryCases(?array $value ): void {
        $this->ediscoveryCases = $value;
    }

}
