<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmailContentThreatSubmission extends EmailThreatSubmission implements Parsable 
{
    /**
     * Instantiates a new EmailContentThreatSubmission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.emailContentThreatSubmission');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmailContentThreatSubmission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmailContentThreatSubmission {
        return new EmailContentThreatSubmission();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fileContent' => fn(ParseNode $n) => $o->setFileContent($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileContent property value. Base64 encoded file content.
     * @return string|null
    */
    public function getFileContent(): ?string {
        $val = $this->getBackingStore()->get('fileContent');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileContent'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fileContent', $this->getFileContent());
    }

    /**
     * Sets the fileContent property value. Base64 encoded file content.
     * @param string|null $value Value to set for the fileContent property.
    */
    public function setFileContent(?string $value): void {
        $this->getBackingStore()->set('fileContent', $value);
    }

}
