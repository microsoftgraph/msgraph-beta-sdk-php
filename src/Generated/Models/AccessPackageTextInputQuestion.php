<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageTextInputQuestion extends AccessPackageQuestion implements Parsable 
{
    /**
     * @var bool|null $isSingleLineQuestion Indicates whether the answer will be in single or multiple line format.
    */
    private ?bool $isSingleLineQuestion = null;
    
    /**
     * Instantiates a new AccessPackageTextInputQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageTextInputQuestion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageTextInputQuestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageTextInputQuestion {
        return new AccessPackageTextInputQuestion();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isSingleLineQuestion' => function (ParseNode $n) use ($o) { $o->setIsSingleLineQuestion($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isSingleLineQuestion property value. Indicates whether the answer will be in single or multiple line format.
     * @return bool|null
    */
    public function getIsSingleLineQuestion(): ?bool {
        return $this->isSingleLineQuestion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isSingleLineQuestion', $this->isSingleLineQuestion);
    }

    /**
     * Sets the isSingleLineQuestion property value. Indicates whether the answer will be in single or multiple line format.
     *  @param bool|null $value Value to set for the isSingleLineQuestion property.
    */
    public function setIsSingleLineQuestion(?bool $value ): void {
        $this->isSingleLineQuestion = $value;
    }

}
