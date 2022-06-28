<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\Security\EdiscoveryCase;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CasesRoot extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<EdiscoveryCase>|null $ediscoveryCases The ediscoveryCases property
    */
    private ?array $ediscoveryCases = null;
    
    /**
     * Instantiates a new CasesRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the ediscoveryCases property value. The ediscoveryCases property
     *  @param array<EdiscoveryCase>|null $value Value to set for the ediscoveryCases property.
    */
    public function setEdiscoveryCases(?array $value ): void {
        $this->ediscoveryCases = $value;
    }

}
