<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryFile extends File implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var EdiscoveryCustodian|null $custodian Custodians associated with the file.
    */
    private ?EdiscoveryCustodian $custodian = null;
    
    /**
     * @var array<EdiscoveryReviewTag>|null $tags Tags associated with the file.
    */
    private ?array $tags = null;
    
    /**
     * Instantiates a new EdiscoveryFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryFile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryFile {
        return new EdiscoveryFile();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the custodian property value. Custodians associated with the file.
     * @return EdiscoveryCustodian|null
    */
    public function getCustodian(): ?EdiscoveryCustodian {
        return $this->custodian;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'custodian' => function (ParseNode $n) use ($o) { $o->setCustodian($n->getObjectValue(array(EdiscoveryCustodian::class, 'createFromDiscriminatorValue'))); },
            'tags' => function (ParseNode $n) use ($o) { $o->setTags($n->getCollectionOfObjectValues(array(EdiscoveryReviewTag::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the tags property value. Tags associated with the file.
     * @return array<EdiscoveryReviewTag>|null
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
        $writer->writeObjectValue('custodian', $this->custodian);
        $writer->writeCollectionOfObjectValues('tags', $this->tags);
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
     * Sets the custodian property value. Custodians associated with the file.
     *  @param EdiscoveryCustodian|null $value Value to set for the custodian property.
    */
    public function setCustodian(?EdiscoveryCustodian $value ): void {
        $this->custodian = $value;
    }

    /**
     * Sets the tags property value. Tags associated with the file.
     *  @param array<EdiscoveryReviewTag>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

}
