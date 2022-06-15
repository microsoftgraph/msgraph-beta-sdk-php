<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Synchronization extends Entity implements Parsable 
{
    /**
     * @var array<SynchronizationJob>|null $jobs Performs synchronization by periodically running in the background, polling for changes in one directory, and pushing them to another directory.
    */
    private ?array $jobs = null;
    
    /**
     * @var array<SynchronizationSecretKeyStringValuePair>|null $secrets Represents a collection of credentials to access provisioned cloud applications.
    */
    private ?array $secrets = null;
    
    /**
     * @var array<SynchronizationTemplate>|null $templates Pre-configured synchronization settings for a particular application.
    */
    private ?array $templates = null;
    
    /**
     * Instantiates a new synchronization and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Synchronization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Synchronization {
        return new Synchronization();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'jobs' => function (ParseNode $n) use ($o) { $o->setJobs($n->getCollectionOfObjectValues(array(SynchronizationJob::class, 'createFromDiscriminatorValue'))); },
            'secrets' => function (ParseNode $n) use ($o) { $o->setSecrets($n->getCollectionOfObjectValues(array(SynchronizationSecretKeyStringValuePair::class, 'createFromDiscriminatorValue'))); },
            'templates' => function (ParseNode $n) use ($o) { $o->setTemplates($n->getCollectionOfObjectValues(array(SynchronizationTemplate::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the jobs property value. Performs synchronization by periodically running in the background, polling for changes in one directory, and pushing them to another directory.
     * @return array<SynchronizationJob>|null
    */
    public function getJobs(): ?array {
        return $this->jobs;
    }

    /**
     * Gets the secrets property value. Represents a collection of credentials to access provisioned cloud applications.
     * @return array<SynchronizationSecretKeyStringValuePair>|null
    */
    public function getSecrets(): ?array {
        return $this->secrets;
    }

    /**
     * Gets the templates property value. Pre-configured synchronization settings for a particular application.
     * @return array<SynchronizationTemplate>|null
    */
    public function getTemplates(): ?array {
        return $this->templates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('jobs', $this->jobs);
        $writer->writeCollectionOfObjectValues('secrets', $this->secrets);
        $writer->writeCollectionOfObjectValues('templates', $this->templates);
    }

    /**
     * Sets the jobs property value. Performs synchronization by periodically running in the background, polling for changes in one directory, and pushing them to another directory.
     *  @param array<SynchronizationJob>|null $value Value to set for the jobs property.
    */
    public function setJobs(?array $value ): void {
        $this->jobs = $value;
    }

    /**
     * Sets the secrets property value. Represents a collection of credentials to access provisioned cloud applications.
     *  @param array<SynchronizationSecretKeyStringValuePair>|null $value Value to set for the secrets property.
    */
    public function setSecrets(?array $value ): void {
        $this->secrets = $value;
    }

    /**
     * Sets the templates property value. Pre-configured synchronization settings for a particular application.
     *  @param array<SynchronizationTemplate>|null $value Value to set for the templates property.
    */
    public function setTemplates(?array $value ): void {
        $this->templates = $value;
    }

}
