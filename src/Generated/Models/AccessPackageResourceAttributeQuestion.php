<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResourceAttributeQuestion extends AccessPackageResourceAttributeSource implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AccessPackageQuestion|null $question The question asked in order to get the value of the attribute
    */
    private ?AccessPackageQuestion $question = null;
    
    /**
     * Instantiates a new AccessPackageResourceAttributeQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResourceAttributeQuestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceAttributeQuestion {
        return new AccessPackageResourceAttributeQuestion();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'question' => function (ParseNode $n) use ($o) { $o->setQuestion($n->getObjectValue(array(AccessPackageQuestion::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the question property value. The question asked in order to get the value of the attribute
     * @return AccessPackageQuestion|null
    */
    public function getQuestion(): ?AccessPackageQuestion {
        return $this->question;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('question', $this->question);
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
     * Sets the question property value. The question asked in order to get the value of the attribute
     *  @param AccessPackageQuestion|null $value Value to set for the question property.
    */
    public function setQuestion(?AccessPackageQuestion $value ): void {
        $this->question = $value;
    }

}
