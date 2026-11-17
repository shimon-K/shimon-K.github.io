---
layout: page
title: Teaching
---

My approach to teaching (and doing research) in AGI is to learn little from a lot (unlike most of academia's view of specialization in one's field), i.e., learn as many ideas as possible, without getting too much into details, just enough to comprehend and understand it perfectly. This perspective can be manifested in research, what's referred to as ["fundamental/basic research"](https://bigthink.com/13-8/basic-research-most-advanced/). It is an advanced type of research, that opens the door for many applied studies to follow.

It is because in my belief, to construct AGI, we should have a wider view of many aspects, because my philosophy is that AGI is a holistic system, i.e. it should be built to handle all possible functions and operations right from the start, in potential. Of course, a fully mature AGI is not accomplished immediately, but after a period of appropriate growth and guidance, yet still, it has to hold the potential in its preliminary "DNA".

Additionally, I gather small ideas, which can be grouped in many ways, since there are multiple connections between ideas. Hence, the current constructed course has an artificial nested order of contents, and whenever possible, these connections are mentioned, to construct a more comprehensive view of how really many diverse ideas are inter-connected.

Another approach I believe to be essential for AGI development, is much more collaboration and discussions, specifically about AGI designing. Since along all the knowledge I gathered, I picked many beautiful ideas, that each touch and solves some aspect of AGI. Some ideas talk about more or less similar principles/concepts, but it seems the authors are not aware of each other. I'm almost sure, that if we gather scientists in different fields, into large forums as it occurs in conferences, we would have much faster convergence to AGI. Take inspiration from the historic ["Dartmouth workshop"](https://en.wikipedia.org/wiki/Dartmouth_workshop).

Finally, I believe in coarse-to-fine hierarchy, like AKREM, to be realized everywhere. Examples: 
<!--1) the sturcture in academic article: headline -> abstract -> body. 
2) in my AGI course: headline -> short video/presentation (~5 min) -> long video/presentation (~1 hour). 
3) how AGI should be designed: top level design -> descent to lower level, and try to implement it there -> descent again and do the same. If at one of the levels you cannot succeed in implementing, go to higher levels, and try different models.-->
<ol>
    <li>The sturcture in academic article: headline -> abstract -> body.</li>
    <li>AGI course: headline -> short video/presentation (~5 min) -> long video/presentation (~1 hour).</li>
    <li>How AGI should be designed: top-level design -> descent to a lower level, and try to implement it there -> descent again and do the same. If at one of the levels, you cannot succeed in implementing, go back to higher levels, and try different models.</li>
</ol>

## Courses

- [AGI Course](https://shimon-K.github.io/AGI-Course/)<!--()--> (in construction)
- [Machine Learning (ML) and Natural Language Processing (NLP), in Hebrew](https://info.braude.ac.il/yedion/fireflyweb.aspx?prgname=S_CourseDetails&arguments=-N41197,-N1,-N1,-N261041442&Lang=E) or [here](https://info.braude.ac.il/info/2026/0041197.pdf)
<br>  **Detailed subjects learned:**	
	- **AI math background:**
		- *Linear Algebra* (linear & non-linear transformations, matrix and vector multiplications, tensors, norms, inner product, cosine distance and other distances, eigen-decomposition)
		- *Calculus and optimization* (properties, chain rule, gradient descent, scalar/vector/matrix derivatives, Taylor expansion)
		- *Probability* (random variables, statistical measures, joint/marginal/conditional probability, distributions, bayes rule, expectation, entropy, parameter estimation via MLE and MAP)
	
	- **Machine learning (ML):**
		- ML pipeline
		- *Linear models* (Covariance matrix, Linear regression/classifier, SVM)
		- *Supervised Learning* (Generative vs Discriminative classification, Logistic Regression, Naïve Bayes, Decision Trees, k-Nearest-Neighbors, Neural Networks)
		- *Clustering* (k-Means, GMM via EM, hierarchical, DBSCAN)

	- **Large Language Models (LLMs):**
		- Text Representations, contextual embeddings, knowledge graphs and RAG, CLIP
		- Transformers, LLM pipeline (pre-training, post-training: SFT, RFT)
		- Transformer types, Transformer Alternatives (Mamba, RWKV, RetNet)
		- *Agent Systems* (Evolution, Types, Frameworks, Protocols, Autonomy measure, Agentic RL, Agentic memory)
- [Deep Generative Models, in Hebrew](https://www.hit.ac.il/students/regulations-newsletters/yedion-data-science/) or [here](https://www.hit.ac.il/wp-content/uploads/2026/10/%D7%9E%D7%93%D7%A2%D7%99-%D7%94%D7%A0%D7%AA%D7%95%D7%A0%D7%99%D7%9D-%D7%99%D7%93%D7%99%D7%A2%D7%95%D7%9F-%D7%AA%D7%A9%D7%A2%D7%96.pdf)
<br>  **Detailed subjects learned:**	
	- **Introduction:**
		- Discriminative vs Generative models
		- Visible and Latent features of the data
		- Generative models tasks
		- Conditional and Unconditional generative versions of different generative model families
		- *Joint Probability* definition and examples; its different decompositions (chain rule, Bayesian network, Markov chains, and n-grams), and its MLE objective
	
	- **Autoregressive (AR) Models:**
		- Examples in vision and language
                - Explicit Density Estimation via MLE optimization
                - Fully Visible Sigmoid Belief Network (FVSBN)
                - Neural Autoregressive Density Estimation (NADE)
                - Masked autoencoder (AE) for Distribution Estimation (MADE)
                - CNN and RNN based models

	- **Latent Variable models:**
		- Shallow latent model - Gaussian Mixture Model (GMM)
		- *Variational AE (VAE)* comparison to GMM and to AE
                - *VAE objective derivation*: Evidence lower bound (ELBO), Importance sampling, Monte Carlo (MC) approximation, Stochastic Variational Inference (SVI), reparameterization trick, Amortized Inference
		- *VAE Latent space*: 2D visualization, arithmetic and interpolation operations
		- *Hierarchical VAE (HVAE)*: NVAE, Markovian HVAE (MHVAE), Non-Markovian HVAE
                - *Additonal VAEs*: Beta-VAE, 
                - *Discrete latent space*: discrete latent variables necessity, Discrete VAE – by discretization, Discrete VAE – by sampling, Reperameterization for Discrete VAE, VAE+AR: Vector-Quantized VAE (VQ-VAE) and VQ-VAE – Hierarchical extension (VQ-VAE-2)

	- **Normalizing flow models:**
		- Flow model versus VAE
		- Change of Variables formula in 1D and in general
		- Cascade or a flow of transformations
		- Efficient flow modeling requirements and Basic invertible flows
		- Method 1: Nonlinear Independent Components Estimation (NICE)
		- Method 2: Real-NVP: Non-volume preserving extension of NICE
		- Method 3: *Continuous AR models as flow models*: Masked Autoregressive Flow (MAF), Inverse Autoregressive Flow (IAF), Parallel Wavenet
		- Method 4: MintNet (Song et al., 2019)
		- Method 5: Gaussianization Flows (Meng et al., 2020)
		- Continuous-time flows

	- **Generative Adversarial Network (GAN) model:**
		- Likelihood issue and alternative: two-sample test objective
		- GAN minimax objective and algorithm; JS divergence; GAN optimal discriminator and generator
		- Deep Convolutional GAN (DCGAN)
		- *f-GAN*: f divergence, Variational Divergence Minimization
		- *WGAN*: Wasserstein (Earth-Mover) distance, WGAN vs GAN
		- Latent representations in GANs and Bidirectional GAN (BiGAN)
		- Conditional GAN (cGAN)
		- Progressive generation (of higher resolution): LapGAN and ProgressiveGAN
		- Other GANs: CycleGAN, Style GAN, and VQ-GAN

	- **Energy-Based Models (EBMs):**
                - EBM vs GAN; Likelihood based learning; definitions
                - Applications: Ising model, Product of Experts, Restricted Boltzmann machine (RBM) and Deep Boltzmann machine (DBM)
                - *Training EBM via Sampling*: Contrastive Divergence (CD), Markov Chain Monte Carlo (MCMC), Metropolis-Hastings MCMC, unadjusted Langevin MCMC
                - *Training EBM without Sampling*: Score Matching, Noise Contrastive Estimation, and Adversarial training

	- **Diffusion models:**
                - *Diffusion models as score-based models*: The Score Function and Fisher Divergence, Methods (Denoising Score Matching (Vincent, 2011) and Tweedie’s formula, Sliced score matching), pitfalls, Langevin dynamics sampling, multiple noise scales: Annealed Langevin Dynamics and Noise Conditional Score Network (NCSN), infinite noise scales: stochastic processes and SDEs, Predictor-Corrector sampling methods
                - *Diffusion models as (hierarchical) VAEs - DDPM*: encoder model and decoder HVAE model; ELBO objective derivation; training, evaluation and inference algorithms, Architectures (U-Net, Diffusion Transformer (DiT))
                - *Diffusion models as normalizing flow models*: Discrete and Continuous diffusion processes via ODE and SDE 
                - *Efficient sampling strategies*: Accelerated sampling and DDIM, DDIM vs DDPM, Denoising Diffusion GANs, Nested Diffusion, Parallel ODE solving, Distillation, Latent and stable diffusion model, 
                - *Controllable generation*: Conditional generation – Classifier Guidance and Classifier-free Guidance, Consistency Models, Multi-Scale Synthesis, Text2Image
                - *Diffusion Models for Discrete Data*: Continuous vs Discrete Data; Concrete Score: Method 1 – Implicit Score Entropy, Method 2 – Denoising Score Entropy, sampling via Markov discrete chain and via continuous-time Markov chain (CTMC); Diffusion LLMs

	- **Evaluation of Generative Models:**
                - Density Estimation or Compression
                - Kernel Density Estimation (KDE)
                - Inception Scores (IS)
<!--Inception Scores: Frechet Inception Distance (FID) vs Kernel Inception Distance (KID)
Sampling/generation (Importance Sampling, Sample quality)
Latent representation learning (Clustering, Lossy Compression, Disentanglement)-->
                - Frechet Inception Distance (FID)
                - Kernel Inception Distance (KID)
                - Precision and Recall; Negative Log-Likelihiood (NLL)

	- **Linear Inverse Problems:**
                - defintions and examples; linear and non-linear problems
                - Solving linear inverse problems: via Bayesian approach (Maximum A Posteriori (MAP) estimator and Minimum Mean-Squared Error (MMSE) estimator), via Generator, via denoisers, via Diffusion
                - distortion-perception trade-off





